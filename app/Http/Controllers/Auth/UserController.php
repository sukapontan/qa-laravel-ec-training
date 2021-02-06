<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        $auth = Auth::user();
        return view('user_detail',[ 'auth' => $auth ]);
    }
}
