<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/v_home');
	}

	public function location()
	{
		redirect('hunafa/location','refresh');
	}

	public function pemesanan()
	{
		redirect('hunafa/pemesanan','refresh');
	}

	public function login()
	{
		redirect('admin/login','refresh');
	}

	public function katalog()
	{
		redirect('hunafa/katalog','refresh');
	}

	public function detail_katalog()
	{
		redirect('hunafa/katalog/detail_katalog','refresh');
	}

	public function layanan()
	{
		redirect('hunafa/layanan','refresh');
	}

	public function bisnis()
	{
		redirect('hunafa/bisnis','refresh');
	}

	public function partner()
	{
		redirect('hunafa/partner','refresh');
	}

	public function tentang()
	{
		redirect('hunafa/tentang','refresh');
	}

	public function history()
	{
		redirect('hunafa/history','refresh');
	}

	public function bantuan()
	{
		redirect('hunafa/bantuan','refresh');
	}

	public function privasi()
	{
		redirect('hunafa/privasi','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */