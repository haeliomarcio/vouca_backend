<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculum';
    protected $fillable = [
        'id',
        'name_pearson',
        'description',
        'document_path',
        'jobs_deployment_id',
    ];
}
