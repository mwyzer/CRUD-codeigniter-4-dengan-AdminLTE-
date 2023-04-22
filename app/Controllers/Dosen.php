<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dosen extends BaseController
{
    public function index()
    {
            $data = [
            'judul' => 'User',
            'page' => 'v_user',
            'menu' => 'masterdata',
            'submenu' => 'dosen',
        ];
        return view('v_template', $data);
    }
}
