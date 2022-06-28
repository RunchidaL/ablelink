<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NetworkType;

class CreateNetworkType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $net_type = [
            [
                'name' => 'Integrated Solution',
            ],
            [
                'name' => '10G Interconnect',
            ],
            [
                'name' => 'MLAG for Redundancy',
            ]
            ];

            foreach($net_type as $key => $value){
                NetworkType::create($value);
            }
    }
}
