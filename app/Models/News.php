<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'id',
        'title',
        'slug_title',
        'image_path',
        'introduction',
        'description',
        'publish',
    ];

}
