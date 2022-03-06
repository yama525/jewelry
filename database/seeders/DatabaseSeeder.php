<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'たけし',
        //     'email' => 'test@a.com',
        //     'password'=> bcrypt('password'),
        // ]);
        // User::create([
        //     'name' => 'かすみ',
        //     'email' => 'test2@a.com',
        //     'password'=> bcrypt('password'),
        // ]);
        // Product::create([
        //     'name' => '指輪',
        //     'lender_user_id' => '1',
        //     'image' => 'jewelry1.jpg',
        // ]);
        // Product::create([
        //     'name' => 'ネックレス',
        //     'lender_user_id' => '2',
        //     'image' => 'jewelry2.jpg',
        // ]);
    }
}
