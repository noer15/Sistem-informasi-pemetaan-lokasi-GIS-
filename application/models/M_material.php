<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_material extends CI_Model {

	public function insert($data)
	{
		$this->db->insert('tbl_material', $data);
	}

	public function get_image($id)
	{
		$this->db->where('id_material', $id);
		return $this->db->get('tbl_material')->row();
	}

	public function hapus($id)
	{
		$this->db->where('id_material',$id);	
		$this->db->delete('tbl_material');
	}

	public function get_id($id)
	{
		$this->db->where('id_material', $id);
		return $this->db->get('tbl_material');
	}

	public function get_harga($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('tbl_kategori');
	}

	public function update($data,$id)
	{
		$this->db->where('id_material', $id);
		$this->db->update('tbl_material', $data);
	}

	public function get_gabung()
	{
		$this->db->from('tbl_material');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_material.id_kategori','left');
		$this->db->join('tbl_supplier', 'tbl_supplier.id_supplier = tbl_material.id_supplier','left');
		$this->db->order_by('id_material', 'desc');
		return $this->db->get();
	}

	public function get_idkategori($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('tbl_material');
	}

	public function get_material()
	{
		return $this->db->get('tbl_material');
	}

}

/* End of file M_material.php */
/* Location: ./application/models/M_material.php */