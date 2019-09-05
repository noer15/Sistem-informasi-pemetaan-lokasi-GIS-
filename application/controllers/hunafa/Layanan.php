<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_layanan';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Layanan.php */
/* Location: ./application/controllers/Layanan.php */