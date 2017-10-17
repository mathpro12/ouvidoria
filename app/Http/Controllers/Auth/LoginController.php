<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

        /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $request)
    {
        $validator = Validator::make($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()) {
            throw new \Exception($validator->errors());
        }

        return true;
    }

    public function getLogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        $this->validator($request->all());

        $credentials = $request->only([
            'email',
            'password'
        ]);

        if(!Auth::attempt($credentials)) {
            return back()->withErrors('Dados Inválidos');
        }

        return 'Success';
    }
}
