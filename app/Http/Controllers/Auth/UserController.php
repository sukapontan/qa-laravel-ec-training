<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //ユーザ情報照会
    public function show($id)
    {
        if($id == Auth::id()){
            return view('user.detail',[ 'id' => $id ]);
        }
        return redirect('/products')->with('flash_message', '不適切なURLです。');
    }

    //ユーザ情報修正
    public function edit($id)
    {
        if($id == Auth::id()){
            return view('user.edit',[ 'id' => $id ]);
        }
        return redirect('/products')->with('flash_message', '不適切なURLです。');
    }

    //ユーザ情報更新
    public function update(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:16'],
            'first_name' => ['required', 'string', 'max:16'],
            'zipcode' => ['required', 'string', 'max:8'],
            'prefecture' => ['required', 'string', 'max:16'],
            'municipality' => ['required', 'string', 'max:16'],
            'address' => ['required', 'string', 'max:16'],
            'apartments' => ['max:32'],
            'email' => ['required', 'string', 'email', 'max:128', Rule::unique('m_users')->ignore(Auth::id())],
            'phone_number' => ['required', 'string', 'max:14', Rule::unique('m_users')->ignore(Auth::id())],
        ]);

        //リクエストデータ受取
        $form = $request->all();
        unset($form['_token']);

        //フォームトークン削除、更新
        $auth = Auth::user();
        $auth->fill($form)->save();
        return view('user.detail',[ 'auth' => $auth ]);
    }

    //ユーザ情報削除
    public function destroy()
    {
        Auth::user()->delete();
        return redirect('/');
    }

}
