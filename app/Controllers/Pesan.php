<?php

namespace App\Controllers;

class Pesan extends BaseController
{

    public function index()
    {
        return view('pesan/inputPesan');
    }

    public function submit()
    {
        $data = ['pesan' => $_POST['pesan']];
        return view('pesan/tampilPesan', $data);
    }
}
