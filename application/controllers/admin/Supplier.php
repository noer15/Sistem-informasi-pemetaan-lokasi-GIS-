<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/supplier/v_supplier',
		'title'		=> 'Supplier' );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_supplier');
	}

	public function index()
	{
		$this->data['supplier'] = $this->M_supplier->get_supplier()->result();
		$this->load->view('main_admin', $this->data);
	}

	public function tambah()
	{
		$this->data['main_view'] = 'admin/supplier/v_fsupplier';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_supplier' 	=> $this->input->post('nama_supplier'),
			'alamat_supplier' 	=> $this->input->post('alamat_supplier'),
			'telp_supplier' 	=> $this->input->post('telp_supplier')
			 );
		$this->M_supplier->insert($data);
        redirect('admin/supplier','refresh');
	}

	public function hapus($id)
	{
		$this->M_supplier->hapus($id);
        redirect('admin/supplier','refresh');
	}

	public function edit($id)
	{
		$this->data['main_view'] = 'admin/supplier/v_fesupplier';
		$this->data['supplier'] = $this->M_supplier->get_id($id)->row();
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id_supplier');
		$data = array(
			'nama_supplier' 	=> $this->input->post('nama_supplier'),
			'alamat_supplier' 	=> $this->input->post('alamat_supplier'),
			'telp_supplier' 	=> $this->input->post('telp_supplier')
			 );
		$this->M_supplier->update($data,$id);
		redirect('admin/supplier','refresh');
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */