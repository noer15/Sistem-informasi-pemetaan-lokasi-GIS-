<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_partner');
		$this->load->model('M_material');
		$this->load->model('M_kategori');

	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_partner';
		$data['partner'] = $this->M_material->get_material()->result();
		$this->load->view('main_frontend',$data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_partner' 			=> $this->input->post('nama_partner'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_partner' 		=> $this->input->post('alamat_partner'),
			'email_partner' 		=> $this->input->post('email_partner'),
			'kebutuhan_partner' 	=> str_replace('"', '', json_encode(implode(", ", $this->input->post('kebutuhan_partner'))))
			 );
		$info = $this->M_partner->insert($data);
		if ($info) {
			$this->session->set_flashdata('pesan', 'Data berhasil dikirim');
        	redirect('hunafa/partner','refresh');
		}
	}

}

/* End of file Partner.php */
/* Location: ./application/controllers/Partner.php */