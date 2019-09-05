<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kategori extends CI_Model {

	public function get_kategori()
	{
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get('tbl_kategori');
	}

	public function get_id($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('tbl_kategori');
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kategori', $data);
	}

	public function update($data,$id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->update('tbl_kategori', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('tbl_kategori');
	}

	public function get_harga($id)
	{
		$this->db->where('id_kategori',$id);
		return $this->db->get('tbl_kategori');
	}

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */