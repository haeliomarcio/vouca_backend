<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobsEmployment extends Model
{
    protected $table = 'jobs_employment';
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'city_id',
        'begin',
        'end',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
