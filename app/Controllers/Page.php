<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('page/about', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Karawang'
                ],
                [
                    'tipe' => 'Kost',
                    'alamat' => 'Jakarta Selatan'
                ]
            ]
        ];
        return view('page/contact', $data);
    }
}
