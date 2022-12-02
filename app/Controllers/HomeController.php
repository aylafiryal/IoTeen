<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to IoTeens'
        ];
        return view('IoTeen/Home', $data);
    }
}