<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_supplier extends CI_Model {

	public function get_supplier()
	{
		$this->db->order_by('id_supplier', 'desc');
		return $this->db->get('tbl_supplier');
	}

	public function get_id($id)
	{
		$this->db->where('id_supplier', $id);
		return $this->db->get('tbl_supplier');
	}

	public function hapus($id)
	{
		$this->db->where('id_supplier',$id);	
		$this->db->delete('tbl_supplier');
	}

	public function insert($data)
	{
		$this->db->insert('tbl_supplier', $data);
	}

	public function update($data,$id)
	{
		$this->db->where('id_supplier', $id);
		$this->db->update('tbl_supplier', $data);
	}

}

/* End of file M_supplier.php */
/* Location: ./application/models/M_supplier.php */