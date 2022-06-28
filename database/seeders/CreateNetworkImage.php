<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NetworkImage;

class CreateNetworkImage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $net_image = [
            [
                'image' => 'photo1.jpg',
                'type_id' => '1',
            ],
            [
                'image' => 'photo2.jpg',
                'type_id' => '2',
            ],
            [
                'image' => 'photo3.jpg',
                'type_id' => '1',
            ]
            ];

            foreach($net_image as $key => $value){
                NetworkImage::create($value);
            }
    }
}
