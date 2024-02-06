<?php
// ini controller untuk halaman user
namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\modelPelayanan;
use App\Models\modelUpload;
use App\Models\modelDaftar;

class PagesController extends BaseController
{
    private modelPelayanan $Pelayanan;
    private modelUpload $Upload_tkt;
    private modelDaftar $Daftar;
    public function __construct()
    {
        $this->Pelayanan = new modelPelayanan();
        $this->Upload_tkt = new modelUpload();
        $this->Daftar = new ModelDaftar();
        helper('number');
        helper('form');
    }
    public function index()
    {

        return view('User/index');
    }
    public function home()
    {
        return view('User/home');
    }
    public function contact()
    {
        helper('form');
        return view('User/contact');

    }
    public function simpanPelayanan()
    {
        $nim = $this->request->getVar('nim');
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $pesan = $this->request->getVar('pesan');

        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'nim' => [
                'rules' => 'required',
                'label' => 'Nim',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'nama' => [
                'rules' => 'required',
                'label' => 'Nama',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'email' => [
                'rules' => 'required',
                'label' => 'Email',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],
            'phone' => [
                'rules' => 'required',
                'label' => 'Phone',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ],
            ],


        ]);
        if (!$valid) {
            $pesan = [
                'errorNamaPelayanan' => $validation->getErrors()
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('user/contact');
        } else {
            $this->Pelayanan->insert([
                'nim' => $nim,
                'nama' => $nama,
                'email' => $email,
                'phone' => $phone,
                'pesan' => $pesan,

            ]);
            $pesan = [
                'sukses' => '<div class="alert alert-success" >Pesan anda telah berhasil tersampakan ke admin </div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('user/PagesController/contact');
        }

    }

    public function shop()
    {

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
            'cart' => \Config\Services::cart(),
            'nohalaman' => $nohalaman
        ];

        return view("User/shop", $data);
    }
    public function shopDesc($id_tkt)
    {

        $data = [
            's' => $this->Upload_tkt->find($id_tkt),
        ];

        return view("User/shopDesc", $data);
    }

    // membuat cart keranjang
    // public function keranjang()
    // {
    //     $cart = \Config\Services::cart();
    //     $response = $cart->contents();
    //     echo '<pre>';
    //     print_r($response);
    //     echo '</pre>';
    // }
    // public function cart()
    // {
    //     return view('User/viewcart');
    // }
    // // Insert shopping cart
    // public function addCart($id)
    // {
    //     $tiket = $this->Upload_tkt->find($id);
    //     if (!$tiket) {
    //         return redirect("/user/shop");
    //     }
    //     $cart = \Config\Services::cart();

    //     $cart->insert([
    //         'id' => $tiket['id_tkt'],
    //         'qty' => 1,
    //         'price' => $tiket['hrg'],
    //         'name' => $tiket['judul'],
    //         'options' => array('foto' => $tiket['foto'])
    //     ]);

    //     session()->setflashdata('pesan', 'Tiket Berhasil Dimasukkan Keranjang !!!');
    //     return redirect()->to(base_url('user/shop'));
    // }

    // public function updateCart($id)
    // {
    //     $tiket = $this->Upload_tkt->find($id);
    //     if (!$tiket) {
    //         return redirect("/user/shop");
    //     }
    //     $cart = \Config\Services::cart();
    //     $keranjang = $cart->contents();
    //     $i = 1;
    //     foreach ($keranjang as $key => $value) {
    //         $cart->Update(array(
    //             'id' => $value['id_tkt'],
    //             'qty' => $this->request->getPost('qty' . $i++),
    //         ));
    //     }
    //     session()->setFlashdata('pesan', 'Data keranjang berhasil Diupdate !!!!');
    //     return redirect()->to(base_url('user/cart'));
    // }
    // public function delateCart($id)
    // {
    //     $cart = \Config\Services::cart();
    //     $keranjang = $cart->contents();
    //     $cart->remove($id);
    //     session()->setFlashdata('pesan', 'Data keranjang berhasil Dihapus !!!!');
    //     return redirect()->to(base_url('user/cart'));

    // }

    // Clear the shopping cart
    // public function clear()
    // {
    //     $cart = \Config\Services::cart();
    //     $cart->destroy();
    //     session()->setflashdata('pesan', 'Semua keranjang berhasil dibersihkan !!!!');
    //     return redirect()->to(base_url('user/cart'));

    // }

    public function Payment($id)
    {
        $data = [
            'id' => $id
        ];
        return view('User/payment', $data);
    }
    public function daftar($id)
    {
        if ($this->request->isAJAX()) {
            $order_id = $this->request->getPost('order_id');
            $nim = $this->request->getPost('nim');
            $nama = $this->request->getPost('nama');
            $kelas = $this->request->getPost('kelas');
            $prodi = $this->request->getPost('prodi');
            $tgl = $this->request->getPost('tgl');
            $this->Daftar->insert([
                'nim' => $nim,
                'nama' => $nama,
                'kelas' => $kelas,
                'prodi' => $prodi,
                'tgl' => $tgl,
                'id_tkt' => $id,
                'order_id' => $order_id
            ]);
            return $order_id;
        } else {
            // Set Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-5aVhPHAT6o2dBOMgrWO8E_4v';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transactions).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
            $tiket = $this->Upload_tkt->select('id_tkt,judul,hrg')->find($id);
            ;
            $order_id = time();
            $params = [
                'transaction_details' => array(
                    'order_id' => $order_id,
                    'gross_amount' => $tiket['hrg'],
                ),
            ];
            $nim = $this->request->getPost('nim');
            $nama = $this->request->getPost('nama');
            $kelas = $this->request->getPost('kelas');
            $prodi = $this->request->getPost('prodi');
            $tgl = $this->request->getPost('tgl');
            $snap_token = \Midtrans\Snap::getSnapToken($params);
            $data = [
                'nim' => $nim,
                'nama' => $nama,
                'kelas' => $kelas,
                'prodi' => $prodi,
                'tgl' => $tgl,
                'snap_token' => $snap_token
            ];
            return redirect()->back()->with('data_trx', $data);
        }
    }
    
}
