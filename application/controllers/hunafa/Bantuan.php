<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bantuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_bantuan';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Bantuan.php */
/* Location: ./application/controllers/Bantuan.php */