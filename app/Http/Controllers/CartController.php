<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CartController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $user->fullAddress = $user->getFullAddress();
        $user->fullName = $user->getFullName();
        return view('cart.index', ['user' => $user]);
    }
}
