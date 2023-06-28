<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kategori extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function data_makanan()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'makanan'));
	}

	public function data_minuman()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'minuman'));
	}

	public function data_pakaian()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'pakaian'));
	}

}

/* End of file m_kategori.php */
/* Location: ./application/models/m_kategori.php */