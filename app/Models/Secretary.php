<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Request;

class Secretary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secretaries';

    protected $fillable = [
        'name',
        'responsible',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
