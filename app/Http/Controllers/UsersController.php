<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

use App\User;

class UsersController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    // ユーザ情報の確認・修正・削除
    public function show()
    {
        return view('users.users', ['user' => Auth::user()]);
    }

    // public function edit()
    // {
    //     return view('user.edit', ['auth' => $auth ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $user_update = $request->all();
    //     $user = Auth::user();
    //     unset($form['_token']);
    //     $user->fill($user_update)->save();

    //     return redirect('/user_edit');
    // }

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     return view('/');
    // }
}
