<?php

namespace App\Controllers;

use App\Models\LoginModel;

class loginAsisten extends BaseController
{

    public function index()
    {
        return view('Asisten/login');
    }

    public function check()
    {
        $model = model(LoginModel::class);
        $post = $this->request->getPost(['username', 'password']);
        $user = $model->where('username', $post['username'])->first();         
        $pass = $model->where('password', $post['password'])->first();       
        if ($user && $pass) {
            $session = session();
            $session->set('pengguna', $post['username']);
            return view('AsistenView/AsistenView');
        } else {
            return view('login/fail');
        }
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('Asisten/login');
            }
        } else {
            return view('Asisten/login');
        }
    }
    public function logout(){
        $session = session();
        $session-> remove('pengguna');
        return view('Asisten/login');
    }

}
