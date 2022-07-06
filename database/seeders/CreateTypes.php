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
                'product_id' => '189',
                'series_id' => '1',
            ],
            [
                'name' => 'Distribution (Riser)',
                'product_id' => '190',
                'series_id' => '1',
            ],
            [
                'name' => 'Single Loose Tube Indoor/Outdoor (All Directic)',
                'product_id' => '191',
                'series_id' => '2',
            ],
            [
                'name' => 'Single Loose Tube Outdoor (Armored)',
                'product_id' => '192',
                'series_id' => '3',
            ],
            [
                'name' => 'Outdoor Single Jacket Armored',
                'product_id' => '193',
                'series_id' => '4',
            ],
            [
                'name' => 'Outdoor Double Jacket Armored',
                'product_id' => '194',
                'series_id' => '5',
            ],
            [
                'name' => 'ARSS  Single Jacket Cable',
                'product_id' => '196',
                'series_id' => '7',
            ],
            [
                'name' => 'ARSS Double Jacket Cable',
                'product_id' => '197',
                'series_id' => '7',
            ]
            ];

            foreach($t as $key => $value){
                TypeModels::create($value);
            }
    }
}
