<?php

namespace App\Http\Controllers;

use App\Models\KitchenSet;
use App\Models\Label;
use App\Models\Prediction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    /**
     * The function index() returns the view home
     *
     * @return The view 'home' is being returned.
     */
    public function index()
    {
        return view('home');
    }

    public function upload(Request $request)
    {
        try {
            $this->validate($request, [
                'data' => 'required'
            ]);

            $image = $request->data;
            $image = str_replace(array('data:image/png;base64,', ' '), array('', '+'), $image);
            $imageName = time() . '.png';
            File::put(storage_path() . '/app/public/' . $imageName, base64_decode($image));
            $imageUrl = asset('storage/' . $imageName);

            $probability = $this->probability($imageUrl);
            $highestProbability = $probability[0];
            $labelName = ucwords($highestProbability->label);
            $score = $highestProbability->score;

            $labelId = Label::query()->where('full_name', $labelName)->first()->id;
            $accuracy = $score;
            $ip = $request->ip();
            $userAgent = $request->userAgent();

            $prediction = Prediction::query()->create([
                'label_id' => $labelId,
                'image' => $imageUrl,
                'accuracy' => $accuracy,
                'ip' => $ip,
                'user_agent' => $userAgent,
                'created_at' => now(),
            ]);

            $predictionId = $prediction->id;
            $res = [
                'prediction_id' => $predictionId,
                'image' => $imageUrl,
                'accuracy' => $accuracy,
            ];
            return response()->json([
                'status' => 'success',
                'data' => $res,
            ]);
        } catch (Exception $e) {
            ray()->exception($e);
            Log::debug($e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }

    }

    public function prediction(Prediction $prediction)
    {
        if($prediction->accuracy <= 0) {
            return redirect()->route('error', ['prediction' => $prediction->id]);
        }
        $sort = request()->get('sort');
        $query = KitchenSet::query()
            ->where('label_id', $prediction->label_id)
            ->when($sort, function ($query, $sort) {
                if($sort === 'asc') {
                    $query->orderBy('price');
                } else if($sort === 'desc') {
                    $query->orderByDesc('price');
                }
            });
        $data = $query->get();
        $minPrice = $data->min('price') / 1000;
        $maxPrice = $data->max('price') / 1000;
        $kitchenSets = $query->paginate(10);
        $minPrice = round($minPrice) . 'k';
        $maxPrice = round($maxPrice) . 'k';
        return view('prediction', compact('prediction', 'kitchenSets', 'minPrice', 'maxPrice'));
    }

    public function error(Prediction $prediction)
    {
        return view('error', compact('prediction'));
    }

    public function history()
    {
        $predictions = Prediction::query()->orderByDesc('created_at')->paginate(15);

        return view('history', compact('predictions'));
    }

    private function probability($imageUrl)
    {
        $imageUrl = str_replace('https://' , 'http://', $imageUrl);
        $url = config('services.ai.kitachi');
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, [
            'form_params' => [
                'url' => $imageUrl,
            ],
        ]);
        $body = $response->getBody();
        $body = json_decode($body);
        return optional($body)->data;
    }
}
