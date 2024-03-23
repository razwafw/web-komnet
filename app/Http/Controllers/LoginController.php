<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Login'
        ];

        return view('login', $data);
    }

    public function authenticateUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        dd('login successful');
    }
}
