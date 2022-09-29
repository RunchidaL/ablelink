<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JacketProducts;

class CreateJacketProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jp = [
            [
                'product_id' => '',
                'jacket_id' => '',
                'group' => '1',
            ],
            [
                'name' => '',
                'product_id' => '',
                'group' => '1',
            ]
            ];

            foreach($jp as $key => $value){
                SeriesModels::create($value);
            }
    }
}
