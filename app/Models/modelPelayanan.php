<?php

namespace App\Models;

use CodeIgniter\Model;

class modelPelayanan extends Model
{

    protected $table            = 'contact';
    protected $primaryKey       = 'nim';
    protected $allowedFields    = [
        'nim','nama','email','phone','pesan'
    ];
    protected $returnType = 'array';

    public function cariData($cari)
    {
        return $this->table('contact')->like('nim', $cari);
    }

}   

