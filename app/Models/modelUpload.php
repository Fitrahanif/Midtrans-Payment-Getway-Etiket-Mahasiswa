<?php

namespace App\Models;

use CodeIgniter\Model;

class modelUpload extends Model
{

    protected $table            = 'uploud_tkt';
    protected $primaryKey       = 'id_tkt';
    protected $allowedFields    = [
        'judul','hrg','deskripsi','benefit','foto','id_tkt'
    ];
    protected $returnType = 'array';

    public function cariData($cari)
    {
        return $this->table('pendaftaran')->like('nim', $cari);
    }
   
}   

