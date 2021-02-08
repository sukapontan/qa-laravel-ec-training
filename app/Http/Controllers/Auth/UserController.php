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

    //ユーザ情報更新
    public function update(Request $request, $id)
    {
        //バリデーション
        $this->validate($request, User::$editRules);

        //対象レコード取得
        $auth = User::find($id);

        //リクエストデータ受取
        $form = $request->all();

        //フォームトークン削除
        $auth->fill($form)->save();

        return redirect('/user');

    }

}
