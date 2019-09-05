<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Privasi extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		public function index()
		{
			$data['main_view'] = 'frontend/v_privasi';
			$this->load->view('main_frontend',$data);
		}
	
	}
	
	/* End of file Privasi.php */
	/* Location: ./application/controllers/Privasi.php */	