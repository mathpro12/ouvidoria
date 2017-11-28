<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Request as ModelRequest;
use App\Models\Stage;

class MeRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(int $requestId)
    {
        $request = ModelRequest::whereId($requestId)
            ->with('secretary')
            ->with('status')
            ->first();

        $history = Stage::where('request_id', '=', $request->id)
            ->with('employee')
            ->with('status')
            ->get();

        return view('requests.request-item', [
            'user' => Auth::user(),
            'request' => $request,
            'history' => $history,
        ]);
    }
}
