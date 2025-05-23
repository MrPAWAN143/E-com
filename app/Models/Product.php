<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'category_id',
        'sub_category_id',
        'description',
        'featured_image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'price',
        'is_active',
        'discount_price',
        'is_discount',
        'quantity',
        'stock',
        'parent_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'parent_id')->select('id', 'name' );
    }


}
