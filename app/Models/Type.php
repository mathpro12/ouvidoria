<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'types';

    protected $fillable = [
        'name',
        'description',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
