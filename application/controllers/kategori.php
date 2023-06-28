<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function beranda()
	{
		$data['barang'] = $this->m_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		//$this->load->view('beranda');
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer');
	}

	public function makanan()
	{
		$data['makanan'] = $this->m_kategori->data_makanan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('makanan',$data);
		$this->load->view('templates/footer');
	}

	public function minuman()
	{
		$data['minuman'] = $this->m_kategori->data_minuman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('minuman',$data);
		$this->load->view('templates/footer');
	}

	public function pakaian()
	{
		$data['pakaian'] = $this->m_kategori->data_pakaian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pakaian',$data);
		$this->load->view('templates/footer');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */