<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	protected $table = "produk";

	public function all($limit = NULL)
	{
		if ($limit != NULL) {
			$sql = $this->db->limit($limit)->get($this->table);
		} else {
			$sql = $this->db->get($this->table);
		}
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

	public function getBySlug($slug)
	{
		$this->db->where("slug", $slug);
		$sql = $this->db->get($this->table);
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

	public function search($keyword)
	{
		//$keyword = $this->db->escape($keyword);
		$this->db->like('produk', $keyword)->or_like('konten', $keyword);
		$sql = $this->db->get($this->table);
		
		//$sq; = $this->db->last_query();
		return $sql->result();
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */