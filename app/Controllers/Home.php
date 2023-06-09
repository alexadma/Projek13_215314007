<?php

namespace App\Controllers;

use \App\Models\TodolistModel;

class Home extends BaseController
{
    protected $todolistModel;
    public function __construct()
    {
        $this->todolistModel = new TodolistModel();
    }

    public function index()
    {
        $todo = $this->todolistModel->findAll();

        $data = [
            'list' => $todo
        ];
        echo view('layout/header');
        echo view('content/create');
        echo view('content/viewlist', $data);
        echo view('layout/footer');
    }

    public function save()
    {
        $this->todolistModel->save([
            'kegiatan' => $this->request->getVar('kegiatan')
        ]);

        return redirect()->to('..');
    }

    public function delete($idkegiatan)
    {
        $this->todolistModel->delete($idkegiatan);
        return redirect()->to('..');
    }

    public function edit($idkegiatan)
    {
        
        $this->todolistModel->save([
            'idkegiatan' => $idkegiatan,
            'status' => 'selesai'
        ]);
        return redirect()->to('..');
    }
}
