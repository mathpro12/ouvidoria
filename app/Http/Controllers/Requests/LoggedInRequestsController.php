<?php

namespace App\Http\Controllers\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Log;

use App\Models\Request as RequestModel;

class LoggedInRequestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $request)
    {
        $validator = Validator::make($request, [
            'user_id' => 'required|integer',
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
        $user = Auth::user();
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

        return view('requests.logged-in-request', [
            'secretaries' => $secretaries,
            'types' => $types,
        ]);
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        $this->validator($data);

        try {
            $request = RequestModel::create($data);

            return redirect()
                ->route('get.home')
                ->with('success', 'Nova requisição realizada com sucesso!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return redirect()
            ->back()
            ->withErrors('Nos desculpe, não foi possível realizar o cadastro da solicitação!');
    }
}
