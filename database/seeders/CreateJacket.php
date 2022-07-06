<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JacketTypes;

class CreateJacket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $j = [
            [
                'name' => 'HDPE Jacket',
            ],
            [
                'name' => 'LSZH Jacket',
            ],
            [
                'name' => 'Rodent Jacket',
            ]
            ];

            foreach($j as $key => $value){
                JacketTypes::create($value);
            }
    }
}
