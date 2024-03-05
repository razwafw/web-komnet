<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Tentang Kami'
        ];

        return view('about', $data);
    }
}
