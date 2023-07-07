<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table             ='lokasi';
    protected $primaryKey        ='id_loc';
    protected $useAutoIncrement  = true;
    protected $allowedFields     = ['nama_loc'];

    
    public function getAllDataLokasi()
    {
      return $this->findAll(); 
     }
}