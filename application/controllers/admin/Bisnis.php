<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bisnis extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/bisnis/v_bisnis',
		'title'		=> 'Bisnis' );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bisnis');
	}

	public function index()
	{
		$this->data['bisnis'] = $this->M_bisnis->get_bisnis()->result();
		$this->load->view('main_admin', $this->data);
	}

	public function tambah()
	{
		$this->data['main_view'] = 'admin/bisnis/v_fbisnis';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_konsumen' 		=> $this->input->post('nama_konsumen'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_konsumen' 		=> $this->input->post('alamat_konsumen'),
			'email_konsumen' 		=> $this->input->post('email_konsumen'),
			'username' 				=> $this->input->post('username'),
			'password' 				=> $this->input->post('password'),
			'kebutuhan_konsumen' 	=> $this->input->post('kebutuhan_konsumen')
			 );
		$this->M_bisnis->insert($data);
        redirect('admin/bisnis','refresh');
	}

	public function hapus($id)
	{
		$this->M_bisnis->hapus($id);
        redirect('admin/bisnis','refresh');
	}

	public function edit($id)
	{
		$this->data['main_view'] = 'admin/bisnis/v_febisnis';
		$this->data['bisnis'] = $this->M_bisnis->get_id($id)->row();
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id_konsumen');
		$data = array(
			'nama_konsumen' 		=> $this->input->post('nama_konsumen'),
			'nama_perusahaan' 		=> $this->input->post('nama_perusahaan'),
			'alamat_konsumen' 		=> $this->input->post('alamat_konsumen'),
			'email_konsumen' 		=> $this->input->post('email_konsumen'),
			'username' 				=> $this->input->post('username'),
			'password' 				=> $this->input->post('password'),
			'kebutuhan_konsumen' 	=> $this->input->post('kebutuhan_konsumen')
			 );
		$this->M_bisnis->update($data,$id);
		redirect('admin/bisnis','refresh');
	}

}

/* End of file Bisnis.php */
/* Location: ./application/controllers/Bisnis.php */