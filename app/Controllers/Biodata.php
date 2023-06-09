<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('biodata/dataDiri')
            . view('layout/footer');
    }
}
