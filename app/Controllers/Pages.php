<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();
        // dd($faker->address);
        $data = [
            'title' => 'Home | UNPAS ',
            'tes' => ['satu', 'dua', 'tiga']

        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About Me'

        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln Jalan Yos Pakuniran jaya kecamatan Pakuniran',
                    'kota' => 'Probolinggo'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'paiton jaya yana desa jabung ',
                    'kota' => 'Probolinggo'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
