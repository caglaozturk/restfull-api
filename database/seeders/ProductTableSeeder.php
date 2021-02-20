<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Product::truncate();
        for($i=0; $i<30; $i++){
            $product_name = $faker->sentence(2);
            $product = Product::create([
                'product_name'=>$product_name,
                'slug'=>str_slug($product_name),
                'description'=>$faker->sentence(20),
                'price'=>$faker->randomFloat(3,1,20)
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
