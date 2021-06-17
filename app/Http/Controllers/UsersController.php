<?php

namespace App\Http\Controllers;

use App\User;
use App\AuthCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\ExhibitorStoreRequest;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function show($id){

        $user = User::findOrFail($id);
        $user->fullAddress = $user->getFullAddress();
        $user->fullName = $user->getFullName();
        //ログインしているアカウント出ない場合検索画面にリダイレクト
        //if($user->id != Auth::id()){
            //return redirect()->route('product.index')->with('message','不適切なURLです');
            return view('users.show',['user'=> $user]);
    }
    public function getEdit($id){

        $user = User::findOrFail($id);
        // if($user->id != Auth::id()){
        //     return redirect()->route('product.index')->with('message','不適切なURLです');
            return view('users.edit',['user'=>$user]);
    }

    public function postEdit(UserEditRequest $request, $id){

        $user = User::find($request->id);

        // if($user->id != Auth::id()){
        //     return redirect()->route('product.index')->with('message','不適切なURLです');

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

        return redirect()->route('user.show',$user->id);
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return view('top');
    }

    /**
     * 出品者登録画面
     */
    public function signupExhibitor($auth_code)
    {
        // TODO 認証コードチェックが必要
        $authRecord = AuthCode::where('auth_code', $auth_code)->first();
        // if (!$authRecord) {
        //     return redirect('/');
        // }

        return view('users.exhibitor_signup');
    }

    /**
     * 出品者登録処理
     */

    public function postExhibitor(User $user ,ExhibitorStoreRequest $request )
    {
        
        User::create([
            'company_name'=>$request['company_name'],
            'last_name'=>$request['last_name'],
            'first_name'=>$request['first_name'],
            'zipcode'=>$request['zipcode'],
            'prefecture'=>$request['prefecture'],
            'municipality'=>$request['municipality'],
            'address'=>$request['address'],
            'apartments'=>$request['apartments'],
            'email' => $request['email'],
            'phone_number'=>$request['phone_number'],
            'password' => Hash::make($request['password']),
            'user_classification_id'=>config('consts.common.USER_CLASSIFICATIONS.exhibitor.value'),
        ]);
        
        // ログイン画面へリダイレクト
        return redirect('/');
     }
     
    

}
