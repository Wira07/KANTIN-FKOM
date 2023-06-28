<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('M_barang');

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}

		$this->load->model('M_barang');
	}

	public function index()
	{
		$data['barang'] = $this->M_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar =''){}else {
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diUpload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_barang' =>$nama_barang,
			'keterangan' =>$keterangan,
			'kategori' =>$kategori,
			'harga' =>$harga,
			'stok' =>$stok,
			'gambar' =>$gambar
		);

		$this->m_barang->tambah_barang($data,'tb_barang');
		redirect('admin/data_barang/index');

		// $rules = $this->M_barang->validation();
		// $this->form_validation->set_rules($rules);

		// if ($this->form_validation->run() == FALSE) {
		// 	$data['barang'] = $this->M_barang->tampil_data()->result();
		// 	$this->load->view('templates_admin/header');
		// 	$this->load->view('templates_admin/sidebar');
		// 	$this->load->view('admin/data_barang',$data);
		// 	$this->load->view('templates_admin/footer');
		// } else {
		// 	$nama_barang = $this->input->post('nama_barang');
		// 	$keterangan = $this->input->post('keterangan');
		// 	$kategori = $this->input->post('kategori');
		// 	$harga = $this->input->post('harga');
		// 	$stok = $this->input->post('stok');
		// 	$gambar = $_FILES['gambar']['name'];
		// 	if ($gambar =''){}else {
		// 		$config ['upload_path'] = './uploads';
		// 		$config ['allowed_types'] = 'jpg|jpeg|png|gif';

		// 		$this->load->library('upload', $config);
		// 		if (!$this->upload->do_upload('gambar')) {
		// 			echo "Gambar gagal diUpload";
		// 		}else{
		// 			$gambar = $this->upload->data('file_name');
		// 		}
		// 	}
		// 	$data = array(
		// 		'nama_barang' =>$nama_barang,
		// 		'keterangan' =>$keterangan,
		// 		'kategori' =>$kategori,
		// 		'harga' =>$harga,
		// 		'stok' =>$stok,
		// 		'gambar' =>$gambar
		// 	);

		// 	$this->M_barang->tambah_barang($data,'tb_barang');
		// 	redirect('admin/data_barang/index');
		// 	}

	}

	public function edit($id)
	{
		$where = array(
			'id_barang' =>$id
		);
		
		$data['barang'] = $this->m_barang->edit_barang($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		$data = array(
			'nama_barang' =>$nama_barang,
			'keterangan' =>$keterangan,
			'kategori' =>$kategori,
			'harga' =>$harga,
			'stok' =>$stok
		);

		$where = array(
			'id_barang' => $id
		);

		$this->m_barang->update_data($where,$data, 'tb_barang');
		redirect('admin/data_barang/index');
	}

	public function delete($id)
	{
		$where = array(
			'id_barang' => $id
		);

		$this->m_barang->delete_data($where, 'tb_barang');
		redirect('admin/data_barang/index');
	}

	public function detail($id_barang)
	{
		$data['barang'] = $this->m_barang->detail_barang($id_barang);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/detail_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function add()
	{
		$rules = $this->M_barang->validation();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/data_barang');
		} else {
			$this->M_barang->tambah_barang();
			redirect('admin');
		}
	}	

	public function tambah()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/tambah_barang');
		$this->load->view('templates_admin/footer');
	}

}

/* End of file data_barang.php */
/* Location: ./application/controllers/data_barang.php */