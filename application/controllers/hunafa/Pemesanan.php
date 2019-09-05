<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
	}

	public function index()
	{
		$data['bisnis'] = $this->M_kategori->get_kategori()->result();
		$data['main_view'] = 'frontend/v_pemesanan';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Bantuan.php */
/* Location: ./application/controllers/Bantuan.php */