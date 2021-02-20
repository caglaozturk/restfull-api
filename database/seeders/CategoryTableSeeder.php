<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        $id = DB::table('categories')->insertGetId(['category_name'=>'Elektronik','slug'=>'elektronik']);
        DB::table('categories')->insert(['category_name'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-tablet','parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Telefon','slug'=>'telefon','parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'TV ve Ses Sistemleri','slug'=>'tv-ses-sistemleri','parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Kamera','slug'=>'kamera','parent_id'=>$id]);
        $id = DB::table('categories')->insertGetId(['category_name'=>'Kitap','slug'=>'kitap']);
        DB::table('categories')->insert(['category_name'=>'Edebiyat', 'slug'=>'edebiyat', 'parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Çocuk', 'slug'=>'cocuk', 'parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Bilgisayar', 'slug'=>'bilgisayar', 'parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Sınavlara Hazırlık', 'slug'=>'sinavlara-hazirlik', 'parent_id'=>$id]);
        DB::table('categories')->insert(['category_name'=>'Dergi','slug'=>'dergi']);
        DB::table('categories')->insert(['category_name'=>'Mobilya','slug'=>'mobilya']);
        DB::table('categories')->insert(['category_name'=>'Dekorasyon','slug'=>'dekorasyon']);
        DB::table('categories')->insert(['category_name'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('categories')->insert(['category_name'=>'Kişisel Bakım','slug'=>'kisisel-bakim']);
        DB::table('categories')->insert(['category_name'=>'Giyim ve Moda','slug'=>'giyim-moda']);
        DB::table('categories')->insert(['category_name'=>'Anne ve çocuk','slug'=>'anne-cocuk']);
        Schema::enableForeignKeyConstraints();
    }
}
