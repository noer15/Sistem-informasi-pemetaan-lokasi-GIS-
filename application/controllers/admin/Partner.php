<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/partner/v_partner',
		'title'		=> 'Partner' );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_partner');
	}

	public function index()
	{
		$this->data['partner'] = $this->M_partner->get_partner()->result();
		$this->load->view('main_admin', $this->data);
	}

	public function tambah()
	{
		$this->data['main_view'] = 'admin/partner/v_fpartner';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_partner' 			=> $this->input->post('nama_partner'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_partner' 		=> $this->input->post('alamat_partner'),
			'email_partner' 		=> $this->input->post('email_partner'),
			'nohp_partner' 			=> $this->input->post('nohp_partner'),
			'kebutuhan_partner' 	=> $this->input->post('kebutuhan_partner')
			 );
		$this->M_partner->insert($data);
        redirect('admin/partner','refresh');
	}

	public function hapus($id)
	{
		$this->M_partner->hapus($id);
        redirect('admin/partner','refresh');
	}

	public function edit($id)
	{
		$this->data['main_view'] = 'admin/partner/v_fepartner';
		$this->data['partner'] = $this->M_partner->get_id($id)->row();
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id_partner');
		$data = array(
			'nama_partner' 		=> $this->input->post('nama_partner'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_partner' 		=> $this->input->post('alamat_partner'),
			'email_partner' 		=> $this->input->post('email_partner'),
			'nohp_partner' 			=> $this->input->post('nohp_partner'),
			'kebutuhan_partner' 	=> $this->input->post('kebutuhan_partner')
			 );
		$this->M_partner->update($data,$id);
		redirect('admin/partner','refresh');
	}

}

/* End of file Partner.php */
/* Location: ./application/controllers/Partner.php */