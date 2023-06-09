<?php

namespace App\Controllers;

class login extends BaseController
{

    public function index()
    {
        return view('login/loginpackage');
    }

    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        if ($post['usr'] == 'admin' && $post['pwd'] == '123') {
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('login/home');
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
                return view('login/loginpackage');
            }
        } else {
            return view('login/loginpackage');
        }
    }
    public function logout(){
        $session = session();
        $session-> remove('pengguna');
        return view('login/loginpackage');
    }

}
