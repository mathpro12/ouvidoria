<?php

namespace App\Http\Controllers\FollowRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FollowRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function get()
    {
        return view('follow-requests.follow-request');
    }
}
