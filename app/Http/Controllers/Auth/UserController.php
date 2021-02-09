<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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

    //ユーザ情報更新
    public function update(Request $request, $id)
    {
        //バリデーション
        $request->validate([
            'last_name' => ['required', 'string', 'max:16'],
            'first_name' => ['required', 'string', 'max:16'],
            'zipcode' => ['required', 'string', 'max:8'],
            'prefecture' => ['required', 'string', 'max:16'],
            'municipality' => ['required', 'string', 'max:16'],
            'address' => ['required', 'string', 'max:16'],
            'apartments' => ['max:32'],
            'email' => ['required', 'string', 'email', 'max:128', 'unique:m_users'],
            'phone_number' => ['required', 'string', 'max:14', 'unique:m_users'],
        ]);



        //対象レコード取得
        $auth = User::find($id);

        //リクエストデータ受取
        $form = $request->all();

        //フォームトークン削除
        $auth->fill($form)->save();

        return redirect('/');

    }

}
