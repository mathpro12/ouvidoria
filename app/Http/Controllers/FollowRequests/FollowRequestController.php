<?php

namespace App\Http\Controllers\FollowRequests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
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
            $dbRequest = RequestModel::where('hash', '=', $request->get('hash'))->first();

            if (count($dbRequest) == 0) {
                return redirect()
                    ->back()
                    ->withErrors('Esse protocolo não foi encontrado em nosso sistema!');
            }

            return view('requests.request-item', [
                'request' => $dbRequest,
            ]);
        } catch(\Exception $e) {
            Log::error($e->getMessage());

            return redirect()
                ->back()
                ->withErrors('Desculpe-nos. Houve um erro ao tentar encontrar a solicitação');
        }
    }
}
