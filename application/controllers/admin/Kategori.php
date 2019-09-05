<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/kategori/v_kategori',
		'title'		=> 'Kategori' );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
	}

	public function index()
	{
		$this->data['kategori'] = $this->M_kategori->get_kategori()->result();
		$this->load->view('main_admin', $this->data);
	}
	
	public function tambah()
	{
		$this->data['main_view'] = 'admin/kategori/v_fkategori';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
			'harga'			=> $this->input->post('harga')
			 );
		$this->M_kategori->insert($data);
        redirect('admin/kategori','refresh');
	}

	public function hapus($id)
	{
		$this->M_kategori->hapus($id);
        redirect('admin/kategori','refresh');
	}

	public function edit($id)
	{
		$this->data['main_view'] = 'admin/kategori/v_fekategori';
		$this->data['kategori'] = $this->M_kategori->get_id($id)->row();
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id_kategori');
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
			'harga'			=> $this->input->post('harga')
			 );
		$this->M_kategori->update($data,$id);
		redirect('admin/kategori','refresh');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */