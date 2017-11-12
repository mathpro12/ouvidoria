<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Log;

use App\Models\Request as ModelRequest;
use App\Models\User;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHome()
    {
        $requests = ModelRequest::where('user_id', '=', Auth::id())
            ->with('secretary')
            ->with('status')
            ->get();

        return view('me.home', [
            'requests' => $requests,
        ]);
    }

    public function getProfile()
    {
        $user = User::whereId(Auth::id())->first();

        return view('me.profile', [
            'user' => $user,
        ]);
    }

    public function putProfile(Request $request)
    {
        if (!$this->validator($request->all())) {
            return back()
                ->withInput($request->input())
                ->withErrors('Dados Incorretos. Todos os campos com * devem ser preenchidos');
        }

        $user = User::whereId(Auth::id())->first();

        foreach ($request->all() as $field => $value) {
            $user->$field = $value;
        }

        $user->save();

        return redirect()
            ->route('get.home')
            ->with('success', 'Dados atualizados com sucesso!');
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $request)
    {
        $validator = Validator::make($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'cpf' => 'required|size:14',
            'address' => 'required|max:255',
            'number' => 'required|max:255',
            'address_suplement' => 'required|max:255',
            'neighborhood' => 'required|max:255',
            'state' => 'required|max:25',
            'city' => 'required|max:255',
        ]);

        if($validator->fails()) {
            Log::error($validator->errors());
            return false;
        }

        return true;
    }
}
