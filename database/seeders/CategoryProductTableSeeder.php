<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('category_product')->truncate();
        $counter = min(Category::count() , Product::count());
        for($i=1; $i<=$counter; $i++){
            DB::table('category_product')->insert(['category_id'=>$i,'product_id'=>$i]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
