<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->main_lib->isLogin()) {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data['users'] = $this->Users->all();
		$data['no'] =1;
		$this->main_lib->getTemplates("users/index", $data);
	}

	public function create()
	{
		if (isset($_POST['create'])) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[admin.email]');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->main_lib->getTemplates("users/create");
			} else {
				$post = $this->input->post();
				$data = [
					'username'		=> $post['username'],
					'password' 		=> password_hash($post['password'], PASSWORD_DEFAULT),
					'email'	   		=> $post['email'],
					'nama_lengkap'	=> $post['nama_lengkap']
				];

				$config['upload_path'] = './upload/users/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (isset($_FILES['foto']['name']) && !empty($_FILES['foto']['name'])) {
					if ( ! $this->upload->do_upload('foto')){
						$this->session->set_flashdata('exe', 'Oops.. Gagal upload foto!');
						$this->main_lib->getTemplates("users/create");
					} else {
						$dataUpload = $this->upload->data();
						$foto = $dataUpload['file_name'];
						$data['foto'] = $foto;
					}
				}

				$create = $this->Users->insert($data);
				if ($create) {
					$this->session->set_flashdata('exe', 'Yosh.. Data user baru berhasil disimpan!');
				} else {
					$this->session->set_flashdata('exe', 'Oops.. Proses tambah data user gagal!');
				}

				redirect(adminRoute('users'));
			}

		} else {
			$this->main_lib->getTemplates("users/create");
		}
	}

	public function edit($id)
	{
		if (!empty(trim($id))) {
			$data['users'] = $this->Users->findById($id);
			$this->main_lib->getTemplates("users/edit", $data);
		}
	}

	public function update($id)
	{
		if (empty(trim($id)) || !isset($_POST['update'])) {
			redirect(adminRoute('users'));
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$data['users'] = $this->Users->findById($id);
				$this->main_lib->getTemplates("users/edit", $data);
			} else {
				$post = $this->input->post();
				$data = [
					'username' => $post['username'],
					'nama_lengkap' => $post['nama_lengkap'],
					'email' => $post['email']
				];

				$config['upload_path'] = './upload/users/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (isset($_FILES['foto']['name']) && !empty($_FILES['foto']['name'])) {
					if ( ! $this->upload->do_upload('foto')){
						$this->session->set_flashdata('exe', 'Oops.. Gagal upload foto!');
						redirect(adminRoute('users/edit/'.$id));
					} else {
						$dataUpload = $this->upload->data();
						$foto = $dataUpload['file_name'];
						$data['foto'] = $foto;
					}
				}

				$update = $this->Users->update($id, $data);
				if ($update) {
					$this->session->set_flashdata('exe', 'Yosh... Data users berhasil diperbarui!');
				} else {
					$this->session->set_flashdata('exe', 'Oops... Data users gagal diperbarui!');
				}

				redirect(adminRoute('users'));
			}
		}
	}

	public function delete($id)
	{
		if (empty(trim($id)) && $id == 0) {
			redirect(adminRoute('users'));
		} else {
			$delete = $this->Users->delete($id);
			if ($delete) {
				$this->session->set_flashdata('exe', 'Yosh... Data users berhasil dihapus!');
			} else {
				$this->session->set_flashdata('exe', 'Oops... Data users gagal dihapus!');
			}

			redirect(adminRoute('users'));
		}
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */