<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = [
        'id',
        'brand_id',
        'information',
        'address',
        'city_id',
        'lat',
        'lng',
    ];

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    
    public function city() {
        return $this->belongsTo(City::class);
    }
}
