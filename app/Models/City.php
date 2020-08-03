<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    protected $fillable = [
        'id',
        'name',
        'state_id',
    ];

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function store() {
        return $this->hasMany(City::class);
    }
}
