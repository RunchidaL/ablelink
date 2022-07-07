<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeModels;

class CreateTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = [
            [
                'name' => 'Zipcord',
                'product_id' => '1',
                'series_id' => '1',
            ],
            [
                'name' => 'Distribution (Riser)',
                'product_id' => '2',
                'series_id' => '1',
            ],
            [
                'name' => 'Single Loose Tube Indoor/Outdoor (All Directic)',
                'product_id' => '3',
                'series_id' => '2',
            ],
            [
                'name' => 'Single Loose Tube Outdoor (Armored)',
                'product_id' => '4',
                'series_id' => '3',
            ],
            [
                'name' => 'Outdoor Single Jacket Armored',
                'product_id' => '5',
                'series_id' => '4',
            ],
            [
                'name' => 'Outdoor Double Jacket Armored',
                'product_id' => '6',
                'series_id' => '5',
            ],
            [
                'name' => 'ARSS  Single Jacket Cable',
                'product_id' => '10',
                'series_id' => '7',
            ],
            // [
            //     'name' => 'ARSS Double Jacket Cable',
            //     'product_id' => '197',
            //     'series_id' => '7',
            // ]
            ];

            foreach($t as $key => $value){
                TypeModels::create($value);
            }
    }
}
