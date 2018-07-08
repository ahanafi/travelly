<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['profile'] = $this->Profile->first();
		$data['no'] = 1;
		$this->main_lib->getTemplates("profile/index", $data);
	}

	public function create()
	{
		if (isset($_POST['create'])) {
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->main_lib->getTemplates("profile/create");
			} else {
				$post = $this->input->post();
				$data = [
					'profile' => $post['profile'],
					'konten'  => $post['konten']
				];

				$insert = $this->Profile->insert($data);
				if ($insert) {
					$this->session->set_flashdata('exe', 'Yosh.. Tambah data baru berhasil!');
					redirect(adminRoute('profile'));
				} else {
					$this->session->set_flashdata('exe', 'Oops.. Prose tambah data gagal!');
					redirect(adminRoute('profile/create'));
				}
			}
		} else {
			$this->main_lib->getTemplates("profile/create");
		}
	}

	public function edit($id)
	{
		if (!empty(trim($id))) {
			$data['profile'] = $this->Profile->findById($id);
			$this->main_lib->getTemplates("profile/edit", $data);
		} else {
			redirect(adminRoute('profile'));
		}
	}

	public function update($id)
	{
		if (empty(trim($id)) || !isset($_POST['update'])) {
			redirect(adminRoute('profile'));
		} else {
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$data['profile'] = $this->Profile->findById($id);
				$this->main_lib->getTemplates("profile/edit", $data);
			} else {
				$post = $this->input->post();
				$data = [
					'profile' => $post['profile'],
					'konten'  => $post['konten']
				];

				$update = $this->Profile->update($id, $data);
				if ($update) {
					$this->session->set_flashdata('exe', 'Yosh... Data profile berhasil diperbarui!');
				} else {
					$this->session->set_flashdata('exe', 'Oops... Data profile gagal diperbarui!');
				}

				redirect(adminRoute('profile'));
			}
		}
	}

	public function delete($id)
	{
		if (!empty(trim($id))) {
			$delete = $this->Profile->delete($id);
			if ($delete) {
				$this->session->set_flashdata('exe', 'Yosh... Data profile berhasil dihapus!');
			} else {
				$this->session->set_flashdata('exe', 'Oops... Data profile gagal dihapus!');
			}

			redirect(adminRoute('profile'));
		} else {
			redirect(adminRoute('profile'));
		}
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */