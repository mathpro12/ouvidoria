<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'statuses';

    protected $fillable = [
        'name',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
