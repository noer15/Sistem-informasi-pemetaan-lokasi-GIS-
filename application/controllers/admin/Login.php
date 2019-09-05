<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public $data = array(
		'main_view' => 'admin/login/v_login',
		'title'		=> 'Setting' );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('admin/login/v_login');
	}

	public function setting()
	{
		$this->data['main_view'] = 'admin/login/v_flogin';
		$this->load->view('main_admin', $this->data);
	}

	public function aksi_edit()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			 );
		$this->M_login->update($data,1);
		$this->logout();
		// redirect('admin/kategori','refresh');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$where = array(
			'username'	=> $username, 
			'password'	=> $password
			);
		$cek = $this->M_login->cek_login('tbl_admin',$where)->num_rows();
		if ($cek>0) {
			$data_session = array(
				'nama'		=> $username,
				'status'	=> md5('kFldkS12jj1kkjd') 
				);
			$this->session->set_userdata($data_session);
			redirect('admin/material','refresh');
			echo '<div class="alert alert-success">
									  <strong>Berhasil !</strong> Username atau password benar
									</div>';
		}else{
			$this->data['pesan'] = '<div class="alert alert-danger">
									  <strong>Gagal!</strong> Username atau password salah
									</div>';
			$this->load->view('admin/login/v_login', $this->data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */