<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use Illuminate\Validation\Rule;


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
    
    public function postEdit(UserRequest $request, $id){
        
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
    
}
