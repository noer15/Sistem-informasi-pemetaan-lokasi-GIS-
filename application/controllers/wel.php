<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wel extends CI_Controller {
	public function cetak_kategori()
	{
		$data['kategori'] = $this->db->get('tbl_kategori')->result();
		$this->load->view('laporan/cetak_kategori',$data);
	}
}