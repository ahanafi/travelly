<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_Misi_model extends CI_Model {

	protected $table = "visi_misi";

	public function all()
	{
		$sql = $this->db->get($this->table);
		return $sql->result();
	}

	public function first()
	{
		$sql = $this->db->get($this->table);
		return $sql->row();
	}

	public function insert($data)
	{
		$insert = $this->db->insert($this->table, $data);
		return ($insert == TRUE) ? TRUE : FALSE;
	}

	public function findById($id)
	{
		$sql = $this->db->get_where($this->table, ['id' => $id]);
		return $sql->row();
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$update = $this->db->update($this->table, $data);
		return ($update == TRUE) ? TRUE : FALSE;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete($this->table);
		return ($delete == TRUE) ? TRUE : FALSE;
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */