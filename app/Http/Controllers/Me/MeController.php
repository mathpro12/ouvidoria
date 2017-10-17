<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Request;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getHome()
    {
        $requests = Request::where('user_id', '=', Auth::id())->get();

        return view('me.home', [
            'requests' => $requests,
        ]);
    }
}
