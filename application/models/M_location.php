<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_location extends CI_Model {

	public function get_coordinates()
	{
		$return = array();
		$query = $this->db->get("tbl_lokasi");
		if ($query->num_rows()>0) {
		foreach ($query->result() as $row) {
		array_push($return, $row);
		}
		}
		return $return;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_lokasi', $data);
	}

	public function get_lokasi()
	{
		$this->db->order_by('id_lokasi', 'desc');
		return $this->db->get('tbl_lokasi');
	}

	public function update($data,$id)
	{
		$this->db->where('id_lokasi', $id);
		$this->db->update('tbl_lokasi', $data);
	}

	public function get_id($id)
	{
		$this->db->where('id_lokasi', $id);
		return $this->db->get('tbl_lokasi');
	}

	public function hapus($id)
	{
		$this->db->where('id_lokasi',$id);	
		$this->db->delete('tbl_lokasi');
	}

}

/* End of file Map_model.php */
/* Location: ./application/models/Map_model.php */