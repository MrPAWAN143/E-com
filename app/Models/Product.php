<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'category_id',
        'sub_category_id',
        'description',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'price',
        'discount_price',
        'is_discount',
        'quantity',
        'stock',
        'parent_id',
    ];

}
