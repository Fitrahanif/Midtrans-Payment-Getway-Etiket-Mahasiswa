<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelDaftar;
use App\Models\modelPelayanan;
use App\Models\modelUpload;

class TicketController extends BaseController
{

    private modelDaftar $Daftar;
    private modelPelayanan $Pelayanan;
    private modelUpload $Upload_tkt;
    public function __construct()
    {
        $this->Pelayanan = new modelPelayanan();
        $this->Daftar = new ModelDaftar();
        $this->Upload_tkt = new modelUpload();
    }
    public function index()
    {

        return view("Admin/index");
    }
    public function dashboard()
    {
        return view("Admin/dashboard");
    }
    public function daftar()
    {
        //Membuat kondisi pencarian
        $tombolcari = $this->request->getPost('tombolcari');

        if (isset($tombolcari)) {
            $cari = $this->request->getPost('cari');
            //  session()->set('cari_kategori',$cari);
            redirect()->to('/pendaftaran/index');
        } else {
            $cari = session()->get('cari_kategori');
        }
        // $dataDaftar = $cari ? $this->Daftar->cariData($cari)->paginate(5, 'pendaftaran') : $this->Daftar->joinToupload_tkt()->paginate(5, 'hasilproduksi');

        $dataDaftar = $cari ? $this->Daftar->cariData($cari)->paginate(5, 'pendaftaran') : $this->Daftar->jointouploud_tkt()->paginate(5, 'pendaftaran');
        $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $filter = [
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
        ];
        $query = $this->Daftar->join('uploud_tkt', 'uploud_tkt.id_tkt=pendaftaran.id_tkt')
            ->select('nim, nama, kelas, prodi, id_daftar, pendaftaran.id_tkt, judul, hrg, tgl');

        // Tambahkan kondisi ke query berdasarkan rentang tanggal
        if ($filter['start_date'] && $filter['end_date']) {
            $query->where('tgl >=', $filter['start_date'])
                ->where('tgl <=', $filter['end_date']);
        }

        // Eksekusi query
        $dataPenjualan = $query->findAll();
        $data = [
            'tampildata' => $filter['start_date'] && $filter['end_date'] ? $dataPenjualan : $dataDaftar,
            'pager' => $this->Daftar->pager,
            'nohalaman' => $nohalaman,
            'filter' => $filter
        ];
        return view("Admin/daftar", $data);
    }
    public function hapusPendaftar($id)
    {
        $rowData = $this->Daftar->find($id);
        if ($rowData) {
            $this->Daftar->delete($id);
            $pesan = [
                'sukses' => '<div class="alert alert-danger" >Data berhasil dihapus..</div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to(base_url('admin/daftar'));
        } else {
            exit('Data Tidak Ditemukan');
        }
    }

    public function detailDaftar($nim)
    {
        helper('form');
        $data = [
            'row' => $this->Daftar->find($nim),
        ];

        return view("Admin/detailDaftar", $data);
    }

    public function Tiket()
    {
        helper('form');
        //Membuat kondisi pencarian
        $tombolcari = $this->request->getPost('tombolcari');

        if (isset($tombolcari)) {
            $cari = $this->request->getPost('cari');
            //  session()->set('cari_kategori',$cari);
            redirect()->to('/upload_tkt/index');
        } else {
            $cari = session()->get('cari_kategori');
        }

        $dataUpload = $cari ? $this->Upload_tkt->cariData($cari)->paginate(5, 'uploud_tkt') : $this->Upload_tkt->paginate(5, 'uploud_tkt');
        $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'tampildata' => $dataUpload,
            'pager' => $this->Upload_tkt->pager,
            'nohalaman' => $nohalaman
        ];

        return view("Admin/Tiket", $data);
    }
    public function hapusTiket($id_tkt)
    {
        $rowData = $this->Upload_tkt->find($id_tkt);
        if ($rowData) {
            $this->Upload_tkt->delete($id_tkt);
            $pesan = [
                'sukses' => '<div class="alert alert-danger" >Data berhasil dihapus..</div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to(base_url('admin/Tiket'));
        } else {
            exit('Data Tidak Ditemukan');
        }
    }
    public function detailTiket($id_tkt)
    {
        helper('form');
        $data = [
            'row' => $this->Upload_tkt->find($id_tkt),
        ];

        return view("Admin/detailTiket", $data);
    }


    public function upload()
    {
        helper('form');
        return view("Admin/upload");
    }
    public function uploadTiket()
    {

        $judul = $this->request->getVar('judul');
        $hrg = $this->request->getVar('hrg');
        $deskripsi = $this->request->getVar('deskripsi');
        $benefit = $this->request->getVar('benefit');
        $foto = $this->request->getFile('foto');

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'judul' => [
                'rules' => 'required',
                'label' => 'Judul',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'hrg' => [
                'rules' => 'required',
                'label' => 'Harga',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'label' => 'Deskripsi',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'benefit' => [
                'rules' => 'required',
                'label' => 'Benefit',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],

        ]);
        if (!$valid) {
            $pesan = [
                'errorNamaTiket' => $validation->getErrors()
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('admin/upload');
        } else {
            $name = $foto->getRandomName();
            $upload_foto = $foto->move("img/tiket", $name);
            if ($upload_foto) {
                $this->Upload_tkt->insert([
                    'judul' => $judul,
                    'hrg' => $hrg,
                    'deskripsi' => $deskripsi,
                    'benefit' => $benefit,
                    'foto' => $name,

                ]);
                $pesan = [
                    'sukses' => '<div class="alert alert-success" >Tiket Berhasl Terupload !!!</div>'
                ];
                session()->setFlashdata($pesan);
                return redirect()->to('admin/Tiket');
            }
        }
    }

    public function formeditTiket($id)
    {
        helper('form');
        $rowData = $this->Upload_tkt->find($id);

        if ($rowData) {
            $data = [
                'id' => $id,
                'judul' => $rowData['judul'],
                'hrg' => $rowData['hrg'],
                'deskripsi' => $rowData['deskripsi'],
                'benefit' => $rowData['benefit'],
                'foto' => $rowData['foto']
            ];
            return view('admin/formeditTiket', $data);
        } else {
            exit("Data tidak ditemukan");
        }
    }


    public function updatedataTiket($idtiket)
    {
        $judul = $this->request->getVar('judul');
        $hrg = $this->request->getVar('hrg');
        $deskripsi = $this->request->getVar('deskripsi');
        $benefit = $this->request->getVar('benefit');
        $foto = $this->request->getFile('foto');

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'judul' => [
                'rules' => 'required',
                'label' => 'Judul',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'hrg' => [
                'rules' => 'required',
                'label' => 'Harga',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'deskripsi' => [
                'rules' => 'required',
                'label' => 'Deskripsi',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'benefit' => [
                'rules' => 'required',
                'label' => 'Benefit',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],

        ]);

        if (!$valid) {
            $pesan = [
                'errorNamaTiket' => $validation->getErrors()
            ];
            session()->setFlashdata($pesan);
            return redirect()->to(base_url('admin/formeditTiket/' . $idtiket));
        } else {
            $name = $foto->getRandomName();
            $upload_foto = $foto->move("img/tiket", $name);
            if ($upload_foto) {
                $this->Upload_tkt->update($idtiket, [
                    'judul' => $judul,
                    'hrg' => $hrg,
                    'deskripsi' => $deskripsi,
                    'benefit' => $benefit,
                    'foto' => $name,
                ]);

                $pesan = [
                    'sukses' => '<div class="alert alert-success">Data berhasil diedit.</div>'
                ];
                session()->setFlashdata($pesan);
                return redirect()->to(base_url() . 'admin/Tiket');
            }
        }
    }
    public function pelayanan()
    {
        //Membuat kondisi pencarian
        $tombolcari = $this->request->getPost('tombolcari');

        if (isset($tombolcari)) {
            $cari = $this->request->getPost('cari');
            //  session()->set('cari_kategori',$cari);
            redirect()->to('/pelayanan/index');
        } else {
            $cari = session()->get('cari_kategori');
        }

        $dataPelayanan = $cari ? $this->Pelayanan->cariData($cari)->paginate(5, 'pelayanan') : $this->Pelayanan->paginate(5, 'pelayanan');
        $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'tampildata' => $dataPelayanan,
            'pager' => $this->Pelayanan->pager,
            'nohalaman' => $nohalaman
        ];

        return view("Admin/pelayanan", $data);
    }

    public function hapusPelayanan($id)
    {
        $rowData = $this->Pelayanan->find($id);
        if ($rowData) {
            $this->Pelayanan->delete($id);
            $pesan = [
                'sukses' => '<div class="alert alert-danger" >Data pelayanan berhasil dihapus !!!</div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to(base_url('admin/pelayanan'));
        } else {
            exit('Data Tidak Ditemukan');
        }
    }
    public function detailPelayanan($nim)
    {
        helper('form');
        $data = [
            'row' => $this->Pelayanan->find($nim),
        ];

        return view("Admin/detailPelayanan", $data);
    }
    public function grafik()
    {

        $data = [
            'penjualan' => $this->Daftar->group_date(),

        ];
        return view("Admin/grafik", $data);
    }
    public function print()
    {
        $dataPenjualan = $this->Daftar->join('uploud_tkt', 'uploud_tkt.id_tkt=pendaftaran.id_tkt')->select('nim,nama,kelas,prodi,id_daftar,pendaftaran.id_tkt,judul,hrg,tgl')->findAll();
        $data = [
            'tampildata' => $dataPenjualan,
        ];


        $file_name = "" . date('y/m/d') . ".pdf";
        $mpdf = new \Mpdf\Mpdf();
        $stylesheet = file_get_contents(ROOTPATH . 'public/css/kv-mpdf-bootstrap.css');
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML(view('Admin/laporan_penjualan', $data), 2);
        $this->response->setHeader('Content-Type', 'application/pdf');
        // D => download 
        // I => VIEW
        return $mpdf->Output($file_name, 'I');
    }

    public function laporanByDate()
    {
        $startDate = $this->request->getVar('start_date');
        $endDate = $this->request->getVar('end_date');

        // Inisialisasi query dengan join dan select
        $query = $this->Daftar->join('uploud_tkt', 'uploud_tkt.id_tkt=pendaftaran.id_tkt')
            ->select('nim, nama, kelas, prodi, id_daftar, pendaftaran.id_tkt, judul, hrg, tgl');

        // Tambahkan kondisi ke query berdasarkan rentang tanggal
        if ($startDate && $endDate) {
            $query->where('tgl >=', $startDate)
                ->where('tgl <=', $endDate);
        }

        // Eksekusi query
        $dataPenjualan = $query->findAll();

        // Data untuk ditampilkan pada laporan
        $data = [
            'tampildata' => $dataPenjualan,
        ];

        $file_name = date('y/m/d') . ".pdf";
        $mpdf = new \Mpdf\Mpdf();
        $stylesheet = file_get_contents(ROOTPATH . 'public/css/kv-mpdf-bootstrap.css');
        $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML(view('Admin/laporan_penjualan', $data), 2);
        $this->response->setHeader('Content-Type', 'application/pdf');
        // D => download 
        // I => VIEW
        return $mpdf->Output($file_name, 'D');
    }


    // public function laporanByDate()
    // {
    //     $nohalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;

    //     $data = [
    //         'pager' => $this->Daftar->pager,
    //         'nohalaman' => $nohalaman
    //     ];
    //     $startDate = $this->request->getPost('start_date');
    //     $endDate = $this->request->getPost('end_date');

    //     $data['tampildata'] = $this->Daftar->getByDateRange($startDate, $endDate);
    //     // dd($data['tampildata']);

    //     return view('admin/daftar', $data);
    // }
}
