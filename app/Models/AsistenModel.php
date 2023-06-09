<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table      = 'asisten';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'NAMA', 'PRAKTIKUM', 'IPK'];
    public function simpan($record)
    {
        $this->save(['NIM' => $record['nim'],'nama' => $record['nama'],'praktikum' => $record['praktikum'],'ipk' => $record['ipk'],]);
    }

public function ambil($nim){
    return $this->where(['NIM'=>$nim])->first();
}

}