<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}
		$this->load->model('m_barang');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->m_barang->find($id);

		$data = array(
			'id'      => $barang->id_barang,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_barang
		);
		
		$this->cart->insert($data);
		redirect('welcome');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');	
	}

	public function proses_pesanan()
	{
		$is_processed = $this->m_invoice->index();
		if ($is_processed) {
			$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('proses_pesanan');
		$this->load->view('templates/footer');
		}else{
			echo "Maaf Pesanan Anda Gagal Diproses";
		}
	}

	public function detail($id_barang)
	{
		$data['barang'] = $this->m_barang->detail_barang($id_barang);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('detail_barang',$data);
		$this->load->view('templates/footer');
	}

	public function cari()
	{
		$cari = $this->input->get('cari');
		$data['barang'] = $this->m_barang->search($cari);
		//die(var_dump($data['barang']));
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer');
	}

	

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */