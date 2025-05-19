<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable = [
        'name',
        'slug',
        'discount',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',
        'description',
        'parent_id'
    ];
}
