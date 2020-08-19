<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculum';
    protected $fillable = [
        'id',
        'name',
        'cpf',
        'telephone',
        'email',
        'cep',
        'address',
        'number',
        'district',
        'city',
        'state',
        'description',
        'document_path',
        'jobs_deployment_id',
    ];

    public function job() {
        return $this->belongsTo(JobsEmployment::class, 'jobs_deployment_id');
    }
}
