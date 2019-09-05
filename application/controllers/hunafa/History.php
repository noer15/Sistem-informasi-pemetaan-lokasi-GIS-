<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_history';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file History.php */
/* Location: ./application/controllers/History.php */