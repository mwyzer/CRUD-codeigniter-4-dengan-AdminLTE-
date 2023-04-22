<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelMahasiswa = new ModelMahasiswa();
    }

    public function index()
    {
            $data = [
            'judul' => 'Mahasiswa',
            'page' => 'mahasiswa/v_mahasiswa',
            'menu' => 'masterdata',
            'submenu' => 'mahasiswa',
            'mhs' => $this->ModelMahasiswa->AllData(),
        ];
        return view('v_template', $data);
    }
}
