<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';
    protected $fillable = [
        'id',
        'name',
        'pais',
    ];

    public function city() {
        return $this->hasMany(City::class);
    }
}
