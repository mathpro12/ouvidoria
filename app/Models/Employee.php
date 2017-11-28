<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'cpf',
        'address',
        'number',
        'address_suplement',
        'neighborhood',
        'city',
        'state',
        'login',
        'password',
    ];
}
