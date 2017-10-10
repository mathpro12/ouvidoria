<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requests';

    protected $fillable = [
        'hash_id',
        'user_id',
        'type_id',
        'secretary_id',
        'status_id',
        'description',
    ];
}
