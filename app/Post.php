<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'price',
        'description',
        'img',
        'cat_id',
        'slug'
    ];
}
