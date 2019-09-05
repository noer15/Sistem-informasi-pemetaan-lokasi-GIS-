<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_login($table,$where)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($data,$id)
	{
		$this->db->where('id_admin', $id);
		$this->db->update('tbl_admin', $data);
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */