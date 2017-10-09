<?php

namespace App\Http\Controllers\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Request;

class RequestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $request)
    {
        $validator = Validator::make($request, [
            'type_id' => 'required|integer',
            'secretary_id' => 'required|integer',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            throw new \Exception($validator->errors());
        }

        return true;
    }

    public function lists(Request $request)
    {
        try {
            $requests = Request::all();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return $requests;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->validator($data);

        try {
            $request = Request::create($data);

            return 'Saved';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return 'Failed';
    }
}
