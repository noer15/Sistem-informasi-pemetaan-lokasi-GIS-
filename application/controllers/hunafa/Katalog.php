<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_material');
	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_katalog';
		$data['material'] = $this->M_material->get_gabung()->result();
		$this->load->view('main_frontend',$data);
	}

	public function detail_katalog($id)
	{
		$data['main_view'] = 'frontend/v_detailkatalog';
		$data['materials'] = $this->M_material->get_gabung()->row();
		$data['material'] = $this->M_material->get_id($id)->row();
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Katalog.php */
/* Location: ./application/controllers/Katalog.php */