<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('googlemaps');
		$this->load->model('M_location');
	}

	public function index()
	{
		$config['center'] = '-6.804024718748889, 108.35258907375328';
		$config['zoom'] = "auto";
		$this->googlemaps->initialize($config);

		$coords = $this->M_location->get_coordinates();
		
		foreach ($coords as $coordinate) {
		$marker = array();
		$marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
		$this->googlemaps->add_marker($marker);
		}

		$data = array();
		$data['map'] = $this->googlemaps->create_map();
		
		$data['lokasi'] = $this->M_location->get_lokasi()->result();
		$data['main_view'] = 'frontend/v_location';
		$this->load->view('main_frontend',$data);
	}

}

/* End of file Location.php */
/* Location: ./application/controllers/Location.php */