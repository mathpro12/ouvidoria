<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;

class MenuController extends Controller
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

    public function get()
    {
        return view('menu.menu');
    }
}
