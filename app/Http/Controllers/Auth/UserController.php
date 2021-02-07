<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //ユーザ情報照会
    public function show()
    {
        $auth = Auth::user();
        return view('user.detail',[ 'auth' => $auth ]);
    }

    //ユーザ情報修正
    public function edit($id)
    {
        $auth = Auth::user();
        return view('user.edit',[ 'auth' => $auth ]);
    }

}
