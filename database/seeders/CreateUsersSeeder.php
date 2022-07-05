<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => '3',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'customer',
                'email' => 'customer@customer.com',
                'role' => '1',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'dealer',
                'email' => 'dealer@dealer.com',
                'role' => '2',
                'password' => bcrypt('1234'),
                'coin' => '50000'
            ]
            ];

            foreach($user as $key => $value){
                User::create($value);
            }
    }
}