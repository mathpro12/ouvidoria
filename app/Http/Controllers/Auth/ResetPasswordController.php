<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Hashids;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function get()
    {
        return view('login.password-reset');
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users',
        ]);

        if($validator->fails()) {
            return redirect()
                ->back()
                ->withInput($request->all())
                ->withErrors('Esse email não foi encontrado em nosso sistema!');
        }

        $user = User::whereEmail($request->get('email'))->first();

        $random = Hashids::encode(Carbon::now()->timestamp);
        $newPassword = substr($random, 0, 6);

        $user->password = Hash::make($newPassword);
        $user->save();
    }
}
