<?php

namespace App\Http\Controllers\FollowRequests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

use App\Models\Request as RequestModel;

class FollowRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function get()
    {
        return view('follow-requests.follow-request');
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hash' => 'required|size:8',
        ]);

        if($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors('Esse protocolo não foi encontrado em nosso sistema!');
        }

        try {
            $request = RequestModel::where('hash', '=', $request->get('hash'))->first();

            return $request;
        } catch(\Exception $e) {
            return redirect()
                ->back()
                ->withErrors('Esse protocolo não foi encontrado em nosso sistema!');
        }
    }
}
