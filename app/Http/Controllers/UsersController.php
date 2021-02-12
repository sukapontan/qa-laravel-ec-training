<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

use App\User;

class UsersController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('welcome');
    }

    // ユーザ情報の確認・修正・削除
    public function show()
    {
        return view('users.users', ['user' => Auth::user()]);
    }


    public function edit($id)
    {
        if (\Auth::id() == $id) {
            $user = $this->user->selectUserId($id);
            return view('users.edit', ['user' => $user]);
        }

        return redirect('/top')->with('flash_message', '不適切なURLです。');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'last_name' => 'required|max:10',
            'first_name' => 'required|max:10',
            'zipcode' => 'required|size:7|regex:/^[0-9]+$/',
            'prefecture' => 'required|max:5',
            'municipality' => 'required|max:10',
            'address' => 'required|max:15',
            'apartments' => 'required|max:20',
            'email' => 'required|email|unique:m_users,email,'.$request->id.'',
            'phone_number' => 'required|max:15|regex:/^[0-9]+$/',
        ]);

        if (\Auth::id() == $id) {
            $user = $request->post();
            $this->user->updateUserInfo($user);
        }

        return redirect()->route('users.edit', ['id' => $id]);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        if (\Auth::id() == $id) {
            User::find($id)->delete();
        }

        return redirect('/');
    }
}
