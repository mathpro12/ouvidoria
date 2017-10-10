<?php

namespace App\Http\Controllers\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Log;
use Hashids;

use App\Models\Request as RequestModel;

class AnonymousRequestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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

    public function getCreate(Request $request)
    {
        return view();
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();

        $this->validator($data);

        try {
            $data['status_id'] = 1;

            $request = RequestModel::create($data);
            $request->hash = Hashids::encode($request->id);
            $request->save();

            return 'Saved';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return 'Failed';
    }
}
