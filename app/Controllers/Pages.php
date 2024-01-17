<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home|Management APP'
        ];

        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc no. 123',
                    'kota' => 'kediri'
                ],
                [
                    'tipe' => 'Kost',
                    'alamat' => 'Jl. efg no. 456',
                    'kota' => 'Surabaya'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
