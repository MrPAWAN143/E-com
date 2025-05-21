<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';

    protected $fillable = [
        'product_id',
        'image_path',
        'image_size',
        'category_id',
        'sub_category_id',

    ];


}
