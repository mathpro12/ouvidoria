<?php

namespace App\Http\Controllers\Requests;

use App\Http\Controllers\Controller;
use Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Log;

use App\Models\Request as RequestModel;
use App\Models\Stage;

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
            'subject' => 'required|max:25',
            'description' => 'required',
        ]);

        if($validator->fails()) {
            throw new \Exception($validator->errors());
        }

        return true;
    }

    public function getCreate(Request $request)
    {
        $secretaries = array_column(
            (array) DB::select('select * from secretaries;'),
            'name',
            'id'
        );

        $types = array_column(
            (array) DB::select('select * from types;'),
            'name',
            'id'
        );

        return view('requests.anonymous-request', [
            'secretaries' => $secretaries,
            'types' => $types,
        ]);
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();

        $this->validator($data);

        $data['status_id'] = 1;

        try {
            $request = RequestModel::create($data);
            $request->hash = Hashids::encode($request->id);
            $request->save();

            $stage = Stage::create([
                'request_id' => $request->id,
                'status_id' => $request->status_id,
            ]);

            $message = 'ATENÇÃO! Esse é o seu protocolo para acompanhar o andamento da sua solicitação!.' .
                'Anote-o, pois é a única forma de você descobrir se sua solicitação está sendo atendida!';

            return redirect()
                ->route('get.follow-request')
                ->with('status', sprintf($message, $request->hash))
                ->with('success', sprintf('PROTOCOLO: %s', $request->hash));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return redirect()
            ->back()
            ->withErrors('Nos desculpe, não foi possível realizar o cadastro da solicitação!');
    }
}
