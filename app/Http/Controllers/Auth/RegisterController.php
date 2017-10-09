<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $request)
    {
        $validator = Validator::make($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'cpf' => 'required|size:14',
            'address' => 'required|max:255',
            'number' => 'required|max:255',
            'address_suplement' => 'required|max:255',
            'neighborhood' => 'required|max:255',
            'state' => 'required|max:25',
            'city' => 'required|max:255',
        ]);

        if($validator->fails()) {
            throw new \Exception($validator->errors());
        }

        return true;
    }

    /**
     * Returns the view of register
     */
    protected function getCreate()
    {
        return view('register.register');
    }

    /**
     * Create a new user after passing validation
     */
    protected function postCreate(Request $request)
    {
        $data = $request->all();

        $this->validator($data);

        $data['password'] = Hash::make($data['password']);

        try {
            $user = User::create($data);
            return 'Saved';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
