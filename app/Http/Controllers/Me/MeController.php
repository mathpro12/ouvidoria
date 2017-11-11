<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Request;
use App\Models\User;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHome()
    {
        $requests = Request::where('user_id', '=', Auth::id())
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
}
