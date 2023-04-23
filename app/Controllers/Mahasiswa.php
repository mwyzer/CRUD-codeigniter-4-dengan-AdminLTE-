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

    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Mahasiswa',
            'page' => 'mahasiswa/v_tambah',
            'menu' => 'masterdata',
            'submenu' => 'mahasiswa',
        ];
        return view('v_template', $data);
    }

    public function InsertData()
    {
        if($this -> validate([
            'nim' => [
                'label' => 'Nim Mahasiswa',
                'rules' => 'required|is_unique[tbl_mahasiswa.nim]', 
                'errors' => [
                    'required' => '{field} Wajib diisi!',
                    'is_unique' => '{field}Sudah ada, Input NIM yang lainnya.',
                ]
            ],
            'nama_mahasiswa' => [
                'label' => 'Nama Mahasiswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !',
                ]
            ],
        ])) {
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Mahasiswa/Tambah'))->withInput('validation',\Config\Services::validation());
        }
       
    }
}
