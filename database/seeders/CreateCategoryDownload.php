<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DownloadCategory;

class CreateCategoryDownload extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d_category = [
            [
                'name' => 'Catelog',
                'slug' => 'catelog',
            ],
            [
                'name' => 'Presentation',
                'slug' => 'presentation',
            ],
            [
                'name' => 'VDO',
                'slug' => 'vdo',
            ]
            ];

            foreach($d_category as $key => $value){
                DownloadCategory::create($value);
            }
    }
}
