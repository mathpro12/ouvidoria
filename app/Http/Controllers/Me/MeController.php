<?php

namespace App\Http\Controllers\Me;

use Illuminate\Support\Facades\Auth;

use App\Models\Request;

class MeController
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
