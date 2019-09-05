<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
        if ($this->session->userdata('status')!=md5('kFldkS12jj1kkjd')) {
			redirect('admin/login','refresh');
		}
	} 

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */