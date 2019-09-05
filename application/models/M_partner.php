<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_partner extends CI_Model {

	public function get_partner()
	{
		$this->db->order_by('id_partner', 'desc');
		return $this->db->get('tbl_partner');
	}

	public function get_id($id)
	{
		$this->db->where('id_partner', $id);
		return $this->db->get('tbl_partner');
	}

	public function hapus($id)
	{
		$this->db->where('id_partner',$id);	
		$this->db->delete('tbl_partner');
	}

	public function insert($data)
	{
		return $this->db->insert('tbl_partner', $data);
	}

	public function update($data,$id)
	{
		$this->db->where('id_partner', $id);
		$this->db->update('tbl_partner', $data);
	}

}

/* End of file M_partner.php */
/* Location: ./application/models/M_partner.php */