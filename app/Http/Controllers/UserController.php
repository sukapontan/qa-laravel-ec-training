<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function show($id)
    {
        
        $user = User::findOrFail($id);
        //ログインしているアカウント出ない場合検索画面にリダイレクト
        if($user->id != Auth::id()){
            return redirect()->route('product.index')->with('message','不適切なURLです');
        }else{
            return view('users.show',['user'=> $user]);   
        }
    }      
}
