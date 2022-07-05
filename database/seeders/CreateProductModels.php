<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductModels;

class CreateProductModels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = [
            [
                'name' => 'Simple, SM, 1Core',
                'slug' => 'F-Z9-01-SX',
                'description' => 'Indoor Cable, Simple, SM, 1Core',
                'web_price' => '4.5',
                'dealer_price' => '2.7',
                'customer_price' => '4.5',
                'product_id' => '189',
                'group_products' => '1',
                'series_id' => '1',
                'type_id' => '1',
            ],
            [
                'name' => 'Duplex, 50/125MM 2Core',
                'slug' => 'F-Z9-02-DX',
                'description' => 'Indoor Cable, Duplex, SM , 2Core',
                'web_price' => '14',
                'dealer_price' => '8.4',
                'customer_price' => '14',
                'product_id' => '189',
                'group_products' => '1',
                'series_id' => '1',
                'type_id' => '1',
            ],
            [
                'name' => 'Cable 6 Core, 50/125 MM',
                'slug' => 'F-D9-06',
                'description' => 'Distribution Cable 6 Core, SM',
                'web_price' => '23.5',
                'dealer_price' => '14.1',
                'customer_price' => '23.5',
                'product_id' => '190',
                'group_products' => '1',
                'series_id' => '1',
                'type_id' => '2',
            ],
            [
                'name' => 'SM 9/125um 4 Core',
                'slug' => 'F-SL-IO9-H-04',
                'description' => 'Indoor/Outdoor Cable, SM 9/125um 4 Core',
                'web_price' => '14',
                'dealer_price' => '8.4',
                'customer_price' => '14',
                'product_id' => '191',
                'group_products' => '1',
                'series_id' => '2',
                'type_id' => '3',
                'jacket_id' => '1',
            ],
            [
                'name' => 'SM 9/125um 6 Core',
                'slug' => 'F-SL-IO9-H-06',
                'description' => 'Indoor/Outdoor Cable, SM 9/125um 6 Core',
                'web_price' => '15',
                'dealer_price' => '9',
                'customer_price' => '15',
                'product_id' => '191',
                'group_products' => '1',
                'series_id' => '2',
                'type_id' => '3',
            ],
            [
                'name' => 'with Armored, SM 9/125um 4 Core',
                'slug' => 'F-SL-ODA9-H-04',
                'description' => 'Outdoor Cable, with Armored, SM 9/125um 4 Core',
                'web_price' => '14',
                'dealer_price' => '8.4',
                'customer_price' => '14',
                'product_id' => '192',
                'group_products' => '1',
                'series_id' => '3',
                'type_id' => '4',
            ],
            [
                'name' => 'with Armored, SM 9/125um 6 Core',
                'slug' => 'F-SL-ODA9-H-06',
                'description' => 'Outdoor Cable, with Armored, SM 9/125um 6 Core',
                'web_price' => '17',
                'dealer_price' => '10.2',
                'customer_price' => '17',
                'product_id' => '192',
                'group_products' => '1',
                'series_id' => '3',
                'type_id' => '4',
            ],
            [
                'name' => 'Jacket,Armored, SM 9/125 12Core',
                'slug' => 'F-ML-ODA9-12-HSJ',
                'description' => 'Outdoor Cable, Single Jacket,Armored, SM 9/125 12Core',
                'web_price' => '28',
                'dealer_price' => '16.8',
                'customer_price' => '28',
                'product_id' => '193',
                'group_products' => '1',
                'series_id' => '4',
                'type_id' => '5',
            ],
            [
                'name' => 'Jacket,Armored, SM 9/125 24Core',
                'slug' => 'F-ML-ODA9-24-HSJ',
                'description' => 'Outdoor Cable, Single Jacket,Armored, SM 9/125 24Core',
                'web_price' => '38',
                'dealer_price' => '22.8',
                'customer_price' => '38',
                'product_id' => '193',
                'group_products' => '1',
                'series_id' => '4',
                'type_id' => '5',
            ],
            [
                'name' => 'Jacket,Armored, SM 9/125 12Core',
                'slug' => 'F-ML-ODA9-12-HDJ',
                'description' => 'Outdoor Cable, Double Jacket,Armored, SM 9/125 12Core',
                'web_price' => '30',
                'dealer_price' => '18',
                'customer_price' => '30',
                'product_id' => '194',
                'group_products' => '1',
                'series_id' => '5',
                'type_id' => '6',
            ],
            [
                'name' => 'Jacket,Armored, SM 9/125 24Core',
                'slug' => 'F-ML-ODA9-24-HDJ',
                'description' => 'Outdoor Cable, Double Jacket,Armored, SM 9/125 24Core',
                'web_price' => '40',
                'dealer_price' => '24',
                'customer_price' => '40',
                'product_id' => '194',
                'group_products' => '1',
                'series_id' => '5',
                'type_id' => '6',
            ],
            [
                'name' => 'ADSS, Single Jacket, SM 9/125 4 Core',
                'slug' => 'F-MN-ADSS9-04-HSJ',
                'description' => 'Outdoor Cable, Multi Loose Tube, ADSS, Single Jacket, SM 9/125 4 Core',
                'web_price' => '12',
                'dealer_price' => '7.2',
                'customer_price' => '12',
                'product_id' => '195',
                'group_products' => '1',
                'series_id' => '6',
            ],
            [
                'name' => 'ARSS, Single Jacket, SM 9/125 04 Core',
                'slug' => 'F-ML-ARSS9-04-HSJ',
                'description' => 'Outdoor Cable, Armored, ARSS, Single Jacket, SM 9/125 04 Core',
                'web_price' => '23',
                'dealer_price' => '13.8',
                'customer_price' => '23',
                'product_id' => '196',
                'group_products' => '1',
                'series_id' => '7',
                'type_id' => '7',
            ],
            [
                'name' => 'ARSS, Single Jacket, SM 9/125 06 Core',
                'slug' => 'F-ML-ARSS9-06-HSJ',
                'description' => 'Outdoor Cable, Armored, ARSS, Single Jacket, SM 9/125 06 Core',
                'web_price' => '26',
                'dealer_price' => '15.6',
                'customer_price' => '26',
                'product_id' => '196',
                'group_products' => '1',
                'series_id' => '7',
                'type_id' => '7',
            ],
            [
                'name' => 'ARSS, Double Jacket, SM 9/125 04 Core',
                'slug' => 'F-ML-ARSS9-04-HDJ',
                'description' => 'Outdoor Cable, Armored, ARSS, Double Jacket, SM 9/125 04 Core',
                'web_price' => '23',
                'dealer_price' => '13.8',
                'customer_price' => '23',
                'product_id' => '197',
                'group_products' => '1',
                'series_id' => '7',
                'type_id' => '8',
            ]
            ];

            foreach($m as $key => $value){
                ProductModels::create($value);
            }
    }
}
