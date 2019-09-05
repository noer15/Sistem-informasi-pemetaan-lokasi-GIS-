<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bisnis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bisnis');
		$this->load->model('M_kategori');


	}

	public function index()
	{
		$data['main_view'] = 'frontend/v_bisnis'; 
		$data['bisnis'] = $this->M_kategori->get_kategori()->result();
		$this->load->view('main_frontend',$data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_konsumen' 		=> $this->input->post('nama_konsumen'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_konsumen' 		=> $this->input->post('alamat_konsumen'),
			'email_konsumen' 		=> $this->input->post('email_konsumen'),
			'kebutuhan_konsumen' 	=> str_replace('"', '', json_encode(implode(", ", $this->input->post('kebutuhan_konsumen'))))
			 );
		$info = $this->M_bisnis->insert($data);
		if ($info) {
			$this->session->set_flashdata('pesan', 'Data berhasil dikirim');
			redirect('hunafa/bisnis','refresh');
		}
		
	}

}

/* End of file Bisnis.php */
/* Location: ./application/controllers/Bisnis.php */