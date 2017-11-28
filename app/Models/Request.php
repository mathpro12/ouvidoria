<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Secretary;
use App\Models\Stage;
use App\Models\Status;

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
        'subject',
        'description',
    ];

    public function secretary()
    {
        return $this->belongsTo(Secretary::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }
}
