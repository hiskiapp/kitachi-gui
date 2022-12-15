<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use JsonException;

class KitchenSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws JsonException
     */
    public function run(): void
    {
        $labels = Label::all();

        $dataInsert = [];
        foreach ($labels as $label) {
            $jsonName = Str::snake($label->full_name) . '.json';
            $jsonFile = file_get_contents(database_path('seeders/dataset/' . $jsonName));
            $decodeJson = json_decode($jsonFile, true, 512, JSON_THROW_ON_ERROR);

            foreach($decodeJson as $key => $item) {
                $soldDesc = $item['sold'];
                $soldDesc = str_replace(',', '.', $soldDesc);
                $soldDesc = preg_replace('/[^0-9.]/', '', $soldDesc);
                $sold = (int) $soldDesc;
                if (str_contains($soldDesc, 'rb')) {
                    $sold = (int) $sold * 1000;
                } elseif (str_contains($soldDesc, 'jt')) {
                    $sold = (int) $sold * 1000000;
                }
                $dataInsert[] = [
                    'id' => Str::uuid()->toString(),
                    'label_id' => $label->id,
                    'name' => Str::title($item['name']),
                    'image' => $item['imageUrl'] !== '' ? $item['imageUrl'] : null,
                    'url' => Str::replace('https://shopee.co.id//', 'https://shopee.co.id/', $item['url']),
                    'currency' => $item['currency'],
                    'price' => (int) Str::replace(['.', $item['currency']], '', $item['price']),
                    'original_price' => $item['originalPrice'] ? (int) Str::replace(['.', $item['currency']], '', $item['originalPrice']) : null,
                    'min_price' => $item['minPrice'] ? (int) Str::replace(['.', $item['currency']], '', $item['minPrice']) : null,
                    'max_price' => $item['maxPrice'] ? (int) Str::replace(['.', $item['currency']], '', $item['maxPrice']) : null,
                    'location' => $item['location'] ?? null,
                    'sold_total' => $sold,
                    'created_at' => now(),
                ];
            }
        }

        $chunks = array_chunk($dataInsert, 1000);
        foreach ($chunks as $chunk) {
            DB::table('kitchen_sets')->insert($chunk);
        }
    }
}
