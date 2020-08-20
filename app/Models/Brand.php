<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = [
        'id',
        'name',
        'image',
    ];

    public function stores() {
        return $this->hasMany(Store::class);
    }
}
