<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Route to Home
     */
    public function index()
    {
        return view('top');
    }
}
