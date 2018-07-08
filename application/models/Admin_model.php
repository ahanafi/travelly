<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	private $table = "admin";

	public function login($username, $password){
		$sql = $this->db->get_where($this->table, ['username' => $username]);
		if ($sql->num_rows() > 0) {
			$data = $sql->row_array();

			if(password_verify($password, $data['password'])) {
				$data['is_login'] = TRUE;
				$data_session = [
					'is_login' 	=> TRUE,
					'user'		=> $data
				];
				$this->session->set_userdata( $data_session );
				return TRUE;
			} else {
				$this->session->set_flashdata('login_fail', 'Oops...! Username/Password salah!');
				return false;
			}
		} else {
			$this->session->set_flashdata('login_fail', 'Oops...! Login Gagal!');
			return false;
		}
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

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */