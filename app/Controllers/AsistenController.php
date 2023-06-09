<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    public function update(){
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim', 'nama', "praktikum","ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->update($post);
        return view('/asisten/updatesuccess');
    }

    public function simpan()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost(['nim', 'nama', "praktikum","ipk"]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->simpan($post);
        return view('/asisten/success');
    }

    public function index()
    {
        return view('AsistenView/AsistenView');
    }
    public function edit()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/Update');
        }
        $data = [
            'nama' => [$this->request->getPost('nama')],
            'praktikum' => [$this->request->getPost('praktikum')],
            'ipk' => [$this->request->getPost('ipk')],
        ];
        $builder->where('nim', $this->request->getPost('nim'));
        $builder->update($data);

        return view('/asisten/updatesuccess');
    }

    public function delete()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }
        $post = $this->request->getPost(['nim']);
        $builder->where('nim', $post);
        $builder->delete();
        return view('/asisten/deletesuccess');
    }

    public function search(){
        if(!$this->request->is('post')){
            return view('/asisten/search');
        }
        $nim=$this->request->getPost(['key']);

        $model=model(AsistenModel::class);
        $asisten=$model->ambil($nim['key']);

        $data = ['hasil'=>$asisten];
        return view('asisten/search',$data);

    }
    
}


