<?php

namespace App\Http\Controllers;

use App\MUser;
use App\Http\Controllers\Controller,
    Session;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = MUser::findOrFail($id);
        // リクエストで受け取ったIDと認証しているユーザーIDが一致しているかチェック
        if (\Auth::id() !== $user->id) {
            // フラッシュメッセージを設定
            Session::flash('flash_message', '不適切なURLです。');
            
            //検索画面がないため、動作確認用にトップページへ遷移して確認
            // return view('top');

            // 検索画面にリダイレクト
            return redirect('/products');

        }
        return view('users.detail', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = MUser::findOrFail($id);
        // リクエストで受け取ったIDと認証しているユーザーIDが一致しているかチェック
        if (\Auth::id() !== $user->id) {

            // フラッシュメッセージを設定
            Session::flash('flash_message', '不適切なURLです。');
            
            //検索画面がないため、動作確認用にトップページへ遷移して確認
            // return view('top');

            // 検索画面にリダイレクト
            return redirect('/products');
        }

        //更新フォーム画面へ遷移
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //認証しているユーザーを取得
        $user = \Auth::user();

        // リクエストで受け取ったIDと認証しているユーザーIDが一致しているかチェック
        if ($id != $user->id) {
            // 前の画面に戻る
            return back();
        }

        //フォーム画面で入力された値でレコードを更新
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->zipcode = $request->zipcode;
        $user->prefecture = $request->prefecture;
        $user->municipality = $request->municipality;
        $user->address = $request->address;
        $user->apartments = $request->apartments;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->save();

        // ユーザー情報画面に遷移
        return redirect()->route('users.show', ['id' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //認証しているユーザーを取得
        $user = \AUth::user();

        // リクエストで受け取ったIDと認証しているユーザーIDが一致しているかチェック
        if ($id != $user->id) {
            // 前の画面に戻る
            return back();
        }

        //ユーザー情報をテーブルから削除
        $user->delete();
        //トップ画面に戻る
        return redirect('/');
    }
}
