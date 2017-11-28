<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;
use App\Models\Request;
use App\Models\Status;

class Stage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stages';

    protected $fillable = [
        'employee_id',
        'status_id',
        'request_id',
        'answer',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
