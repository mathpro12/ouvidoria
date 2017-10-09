<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
        'cpf',
        'address',
        'number',
        'address_suplement',
        'neighborhood',
        'city',
        'state',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
