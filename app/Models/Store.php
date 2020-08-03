<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = [
        'id',
        'name',
        'information',
        'address',
        'city_id',
        'lat',
        'lng',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }
}
