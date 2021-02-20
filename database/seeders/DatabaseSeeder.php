<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\CategoryProductTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
