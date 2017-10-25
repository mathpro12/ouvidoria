<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Auth;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function get()
    {
        if (Auth::check()) {
            return redirect()->route('get.home');
        }

        return view('menu.menu');
    }
}
