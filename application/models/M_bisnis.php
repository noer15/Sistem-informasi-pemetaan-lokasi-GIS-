<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_bisnis extends CI_Model {

	public function get_bisnis()
	{
		$this->db->order_by('id_konsumen', 'desc');
		return $this->db->get('tbl_konsumen');
	}

	public function get_id($id)
	{
		$this->db->where('id_konsumen', $id);
		return $this->db->get('tbl_konsumen');
	}

	public function hapus($id)
	{
		$this->db->where('id_konsumen',$id);	
		$this->db->delete('tbl_konsumen');
	}

	public function insert($data)
	{
		return $this->db->insert('tbl_konsumen', $data);
	}

	public function update($data,$id)
	{
		$this->db->where('id_konsumen', $id);
		$this->db->update('tbl_konsumen', $data);
	}

}

/* End of file M_bisnis.php */
/* Location: ./application/models/M_bisnis.php */