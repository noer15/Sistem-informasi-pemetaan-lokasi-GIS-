<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends MY_Controller {

	public $data = array(
		'main_view' => 'admin/material/v_material',
		'title'		=> 'Material' 
		);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_material');
		$this->load->model('M_kategori');
		$this->load->model('M_supplier');
	}

	public function index()
	{
		$this->data['material'] = $this->M_material->get_gabung()->result();
		$this->data['main_view'] = 'admin/material/v_material';
		$this->load->view('main_admin', $this->data);
	}

	function getHarga($id)
	{
		$data = $this->M_kategori->get_harga($id)->row();
		echo $data->harga;
	}

	public function tambah()
	{
		$this->data['kategori'] = $this->M_kategori->get_kategori()->result();
        
        $supplier = $this->M_supplier->get_supplier()->result();
        foreach($supplier as $row)
        {
            $this->data['supplier'][$row->id_supplier] = $row->nama_supplier;
        }
		$this->data['main_view'] = 'admin/material/v_fmaterial';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_tambah()
	{
		$config = array(
            'upload_path' => './uploads/original/',
            'allowed_types' => 'jpg|jpeg|png',
            'file_name' => time()
            );
	    $this->load->library('upload', $config);
	    $this->upload->do_upload();
	    $image_data = $this->upload->data();
	  
	    $config = array(
	        'source_image' => $image_data['full_path'],
	        'new_image' => './uploads/thumbs_material/',
	        'maintain_ration' => true,
	        'width' => 270,
	        'height' => 170
	    );
	    $this->image_lib->initialize($config);
	    $this->image_lib->resize();

		$data = array(
         	'nama_material'			=> $this->input->post('nama_material'),
         	'id_kategori'			=> $this->input->post('id_kategori'),
         	'cirifisik_material'	=> $this->input->post('cirifisik_material'),
         	'ukuran_material'		=> $this->input->post('ukuran_material'),
         	'warna_material'		=> $this->input->post('warna_material'),
         	'kegunaan_material'		=> $this->input->post('kegunaan_material'),
         	'harga'					=> $this->input->post('harga'),
         	'id_supplier'			=> $this->input->post('id_supplier'),
         	'gambar_material'		=> $image_data['file_name']
         	
         	 );
         $this->M_material->insert($data);
         redirect('admin/material','refresh');
	}

	public function hapus($id)
	{
		$rowgambar = $this->M_material->get_image($id);
	    $path_produk = './uploads/thumbs_material/';
	    $path_original = './uploads/original/';
	    @unlink($path_produk.$rowgambar->gambar_material);
	    @unlink($path_original.$rowgambar->gambar_material);
	    $this->M_material->hapus($id);
	    redirect('admin/material','refresh');
	}

	public function edit($id)
	{
		$this->data['material'] = $this->M_material->get_id($id)->row();
        $kategori = $this->M_kategori->get_kategori()->result();
        foreach($kategori as $row)
        {
            $this->data['kategori'][$row->id_kategori] = $row->nama_kategori;
        }
        $this->data['supplier'] = $this->M_supplier->get_id($id)->row();
        $supplier = $this->M_supplier->get_supplier()->result();
        foreach($supplier as $row)
        {
            $this->data['supplier'][$row->id_supplier] = $row->nama_supplier;
        }
        $this->data['main_view'] = 'admin/material/v_fematerial';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$id = $this->input->post('id');

		if($_FILES['userfile']['name']){

			$rowgambar = $this->M_material->get_image($id);
		    $path_produk = './uploads/thumbs_material/';
		    $path_original = './uploads/original/';
		    @unlink($path_produk.$rowgambar->gambar_material);
		    @unlink($path_original.$rowgambar->gambar_material);

			$config = array(
	            'upload_path' => './uploads/original/',
	            'allowed_types' => 'jpg|jpeg|png',
	            'file_name' => time()
            );
		    $this->load->library('upload', $config);
		    $this->upload->do_upload();
		    $image_data = $this->upload->data();
		  
		    $config = array(
		        'source_image' => $image_data['full_path'],
		        'new_image' => './uploads/thumbs_material/',
		        'maintain_ration' => true,
		        'width' => 250,
		        'height' => 250
		    );
		    $this->image_lib->initialize($config);
		    $this->image_lib->resize();

		    $data = array(
	         	'nama_material'			=> $this->input->post('nama_material'),
	         	'id_kategori'			=> $this->input->post('id_kategori'),
	         	'cirifisik_material'	=> $this->input->post('cirifisik_material'),
	         	'ukuran_material'		=> $this->input->post('ukuran_material'),
	         	'warna_material'		=> $this->input->post('warna_material'),
	         	'kegunaan_material'		=> $this->input->post('kegunaan_material'),
	         	'harga'					=> $this->input->post('harga'),
	         	'id_supplier'			=> $this->input->post('id_supplier'),
	         	'gambar_material'		=> $image_data['file_name']
	         	
	         	 );
	        $this->M_material->update($data,$id);
	    	redirect('admin/material','refresh');
	    

		}else{
			$data = array(
	         	'nama_material'			=> $this->input->post('nama_material'),
	         	'id_kategori'			=> $this->input->post('id_kategori'),
	         	'cirifisik_material'	=> $this->input->post('cirifisik_material'),
	         	'ukuran_material'		=> $this->input->post('ukuran_material'),
	         	'warna_material'		=> $this->input->post('warna_material'),
	         	'kegunaan_material'		=> $this->input->post('kegunaan_material'),
	         	'harga'					=> $this->input->post('harga'),
	         	'id_supplier'			=> $this->input->post('id_supplier')
	         	
	         	 );
	        $this->M_material->update($data,$id);
	    	redirect('admin/material','refresh');
		}
	}

}

/* End of file Material.php */
/* Location: ./application/controllers/Material.php */