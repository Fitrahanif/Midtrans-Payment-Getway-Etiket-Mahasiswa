<?php

namespace App\Models;

use CodeIgniter\Model;

class modelDaftar extends Model
{

    protected $table = 'pendaftaran';
    protected $primaryKey = 'nim';
    protected $allowedFields = [
        'nim',
        'nama',
        'kelas',
        'prodi',
        'id_tkt',
        'tgl',
        'order_id',
    ];
    protected $returnType = 'array';
  
    public function cariData($cari)
    {
        return $this->joinTouploud_tkt()->like('nim', $cari);
    }
    public function joinTouploud_tkt(): mixed
    {
        return $this->join('uploud_tkt', 'uploud_tkt.id_tkt=pendaftaran.id_tkt');
    }
    public function get_penjualan()
    {
        return $this->table('pendaftaran')->get()->getResultArray();
    }
    public function group_date()
    {
        return $this->table('pendaftaran')->groupBy('tgl')->select("COUNT(id_daftar) as total_tiket,tgl")->get()->getResultArray();
    } 
    // public function filter($categori_tkt)
    // {
    //     return $this->get_whare('pendaftaran',['id_tkt' => $categori_tkt])->row_array();
    // }
    // public function getByDateRange($startDate, $endDate)
    // {
    //     return $this->where('tgl >=', $startDate)
    //                 ->where('tgl <=', $endDate)
    //                 ->findAll();
    // }
    
    public function getByDateRange($startDate, $endDate)
    {
        return $this
                    ->join('uploud_tkt', 'uploud_tkt.id_tkt=pendaftaran.id_tkt')
                    ->where('tgl >=', $startDate)
                    ->where('tgl <=', $endDate)
                    ->findAll();
    }
}

