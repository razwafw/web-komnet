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

    public function authenticateUser()
    {
        return request()->all();
    }
}
