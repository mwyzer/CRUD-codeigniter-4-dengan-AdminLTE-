<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
   public function AllData()
   {
    return $this->db->table('tbl_mahasiswa')->Get()-> getResultArray();
   }
   
   public function InsertData($data)
   {
      $this->db->table('tbl_mahasiswa')->insert($data);
   }
}
