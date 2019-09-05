<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/location/v_location',
		'title'		=> 'Location' );

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('googlemaps','session','form_validation','pagination'));
		$this->load->model('M_location');
	}

	public function index()
	{
		$this->data['lokasi'] = $this->M_location->get_lokasi()->result();
		$this->load->view('main_admin', $this->data);
	}

	public function tambah()
	{
		$config['center'] = '-6.726974077169387, 108.55377620754234';
		$config['zoom'] = '13';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-6.726974077169387, 108.55377620754234';
		$marker['draggable'] = true;
		// $marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
		$marker['ondragend'] = 'document.getElementById(\'latitude\').value = event.latLng.lat();document.getElementById(\'longitude\').value = event.latLng.lng();';
		$this->googlemaps->add_marker($marker);
		$this->data['map'] = $this->googlemaps->create_map();
		
		$this->data['main_view'] = 'admin/location/v_flocation';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_lokasi' 	=> $this->input->post('nama_lokasi'), 
			'latitude' 		=> $this->input->post('latitude'), 
			'longitude' 	=> $this->input->post('longitude')
		);
		$this->M_location->insert($data);
		redirect('admin/location','refresh');
	}

	public function edit($id)
	{
		$config['center'] = '-6.726974077169387, 108.55377620754234';
		$config['zoom'] = '13';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-6.726974077169387, 108.55377620754234';
		$marker['draggable'] = true;
		// $marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
		$marker['ondragend'] = 'document.getElementById(\'latitude\').value = event.latLng.lat();document.getElementById(\'longitude\').value = event.latLng.lng();';
		$this->googlemaps->add_marker($marker);
		$this->data['map'] = $this->googlemaps->create_map();

		$this->data['main_view'] = 'admin/location/v_felocation';
		$this->data['lokasi'] = $this->M_location->get_id($id)->row();
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id_lokasi');
		$data = array(
			'nama_lokasi' 	=> $this->input->post('nama_lokasi'), 
			'latitude' 		=> $this->input->post('latitude'), 
			'longitude' 	=> $this->input->post('longitude')
		);
		$this->M_location->update($data,$id);
		redirect('admin/location','refresh');
	}

	public function hapus($id)
	{
		$this->M_location->hapus($id);
        redirect('admin/location','refresh');
	}

}

/* End of file Location.php */
/* Location: ./application/controllers/Location.php */