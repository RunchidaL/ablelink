<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NetworkValue;

class CreateNetworkValue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $net_value = [
            [
                'network_image_id' => '1',
                'product_in_photo' => '20',
                'product_id' => '26',
            ],
            [
                'network_image_id' => '1',
                'product_in_photo' => '22',
                'product_id' => '26',
            ],
            [
                'network_image_id' => '2',
                'product_in_photo' => '23',
                'product_id' => '26',
            ],
            [
                'network_image_id' => '2',
                'product_in_photo' => '24',
                'product_id' => '26',
            ],
            [
                'network_image_id' => '3',
                'product_in_photo' => '26',
                'product_id' => '27',
            ]
            ];

            foreach($net_value as $key => $value){
                NetworkValue::create($value);
            }
    }
}
