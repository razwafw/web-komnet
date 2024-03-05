<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Utama'
        ];

        return view('home', $data);
    }
}
