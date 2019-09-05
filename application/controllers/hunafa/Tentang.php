<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_tentang';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */