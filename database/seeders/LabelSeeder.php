<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'full_name' => 'Garpu Besi',
                'name' => 'Garpu',
                'material' => 'Besi'
            ],
            [
                'full_name' => 'Garpu Plastik',
                'name' => 'Garpu',
                'material' => 'Plastik'
            ],
            [
                'full_name' => 'Mangkok Kaca',
                'name' => 'Mangkok',
                'material' => 'Kaca'
            ],
            [
                'full_name' => 'Mangkok Plastik',
                'name' => 'Mangkok',
                'material' => 'Plastik'
            ],
            [
                'full_name' => 'Panci Besi',
                'name' => 'Panci',
                'material' => 'Besi'
            ],
            [
                'full_name' => 'Panci Listrik',
                'name' => 'Panci',
                'material' => 'Listrik'
            ],
            [
                'full_name' => 'Piring Kaca',
                'name' => 'Piring',
                'material' => 'Kaca'
            ],
            [
                'full_name' => 'Piring Plastik',
                'name' => 'Piring',
                'material' => 'Plastik'
            ],
            [
                'full_name' => 'Sendok Besi',
                'name' => 'Sendok',
                'material' => 'Besi'
            ],
            [
                'full_name' => 'Sendok Nasi',
                'name' => 'Sendok',
                'material' => 'Nasi'
            ],
            [
                'full_name' => 'Sendok Plastik',
                'name' => 'Sendok',
                'material' => 'Plastik'
            ],
            [
                'full_name' => 'Sumpit Kayu',
                'name' => 'Sumpit',
                'material' => 'Kayu'
            ],
            [
                'full_name' => 'Sumpit Plastik',
                'name' => 'Sumpit',
                'material' => 'Plastik'
            ],
            [
                'full_name' => 'Wajan Besi',
                'name' => 'Wajan',
                'material' => 'Besi'
            ],
        ];

        foreach ($data as $item) {
            Label::create($item);
        }
    }
}
