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
        'link',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cat_id', 'id');
    }
}
