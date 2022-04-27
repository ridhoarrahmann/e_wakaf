<?php

namespace App\Controller;

class pelanggan extends CI_Controller
{
    public function index()
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i <100; $i++) {
            $pelanggan[] = [
                 'nama'=>$faker->name(),
                 'no_telpon'=>$faker ->phoneNumber(),
                 'alamat'=> $faker ->address(),
                 'email' => $faker -> email(),
            ];
        }
        $data['pelanggan'] = $pelanggan;
        return view('pelanggan_view',$data);
    }
}