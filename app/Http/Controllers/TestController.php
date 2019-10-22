<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = \App\User::all();

        return view('test-index', ['users' => $users]);
    }
}
