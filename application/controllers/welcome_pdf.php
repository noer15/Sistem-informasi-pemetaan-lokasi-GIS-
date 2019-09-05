<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_pdf extends CI_Controller {

	public $data = array(
		'main_view' => 'laporan',
		'title'		=> 'Kategori' );

		function __construct(){
		parent::__construct();
		{
			$this->load->helper('url');
		  	$this->load->model(array('M_kategori','M_partner','M_supplier'));
		  	$this->load->library('dompdf_gen');
		}
		  
	}
	/**
	 * Example: DOMPDF 
	 *
	 * Documentation: 
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	public function cetak_kategori()
	{

		$this->data['kategori'] = $this->M_kategori->get_kategori()->result();
		$this->load->view('laporan/cetak_kategori', $this->data);
		$html = $this->output->get_output();
		
		// Load/panggil library dompdfnya
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		//utk menampilkan preview pdf
		$this->dompdf->stream("kategori.pdf",array('Attachment'=>0));
	}
	public function cetak_supplier()
	{

		$this->data['supplier'] = $this->M_supplier->get_supplier()->result();
		$this->load->view('laporan/cetak_supplier', $this->data);
		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("supplier.pdf",array('Attachment'=>0));
	}
	public function cetak_partner()
	{

		$this->data['partner'] = $this->M_partner->get_partner()->result();
		$this->load->view('laporan/cetak_partner', $this->data);
		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("partnership.pdf",array('Attachment'=>0));
	}
	
}

