<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_category';

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'parent_id',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   
}
