<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Model {

	private $table;

	public function _setTable($table) {
		$this->table = $table;
	}

	public function all()
	{
		$sql = $this->db->get($this->table);
		return $sql->result();
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

/* End of file CRUD.php */
/* Location: ./application/models/CRUD.php */