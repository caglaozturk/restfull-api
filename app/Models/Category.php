<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class,'category_product');
    }

    public function parent_category()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id')->withDefault([
            'category_name' =>'Ana Kategori'
        ]);
    }
}
