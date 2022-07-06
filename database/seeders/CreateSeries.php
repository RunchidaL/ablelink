<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeriesModels;

class CreateSeries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = [
            [
                'name' => 'Fiber Optic Indoor',
                'group_id' => '1',
            ],
            [
                'name' => 'Fiber Optic Indoor/Outdoor',
                'group_id' => '1',
            ],
            [
                'name' => 'Fiber Optic Duct',
                'group_id' => '1',
            ],
            [
                'name' => 'Multi loose Tube Outdoor Duct Armored',
                'group_id' => '1',
            ],
            [
                'name' => 'Multi loosetube Outdoor Double Jacket Armored',
                'group_id' => '1',
            ],
            [
                'name' => 'Fiber Optic ADSS',
                'group_id' => '1',
            ],
            [
                'name' => 'Fiber Optic ARSS',
                'group_id' => '1',
            ]
            ];

            foreach($s as $key => $value){
                SeriesModels::create($value);
            }
    }
}
