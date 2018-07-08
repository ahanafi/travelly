<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends CI_Controller {

	protected $path = "visi-misi/";

	public function index()
	{
		$data['visi_misi'] = $this->Visi_Misi->first();
		$data['no'] = 1;
		$this->main_lib->getTemplates($this->path."index", $data);
	}

	public function create()
	{
		if (isset($_POST['create'])) {
			$this->form_validation->set_rules('visi', 'Visi', 'required');
			$this->form_validation->set_rules('misi', 'Misi', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->main_lib->getTemplates($this->path."create");
			} else {
				$post = $this->input->post();
				$data = [
					'visi' => $post['visi'],
					'misi' => $post['misi'],
					'konten'  => $post['konten']
				];

				$insert = $this->Visi_Misi->insert($data);
				if ($insert) {
					$this->session->set_flashdata('exe', 'Yosh.. Tambah data baru berhasil!');
					redirect(adminRoute('visi-misi'));
				} else {
					$this->session->set_flashdata('exe', 'Oops.. Prose tambah data gagal!');
					redirect(adminRoute('visi-misi/create'));
				}
			}
		} else {
			$this->main_lib->getTemplates($this->path."create");
		}
	}

	public function edit($id)
	{
		if (!empty(trim($id))) {
			$data['visi_misi'] = $this->Visi_Misi->findById($id);
			$this->main_lib->getTemplates($this->path."edit", $data);
		} else {
			redirect(adminRoute('profile'));
		}
	}

	public function update($id)
	{
		if (empty(trim($id)) || !isset($_POST['update'])) {
			redirect(adminRoute('visi-misi'));
		} else {
			$this->form_validation->set_rules('visi', 'Visi', 'required');
			$this->form_validation->set_rules('misi', 'Misi', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->main_lib->getTemplates($this->path."create");
			} else {
				$post = $this->input->post();
				$data = [
					'visi' => $post['visi'],
					'misi' => $post['misi'],
					'konten'  => $post['konten']
				];

				$update = $this->Visi_Misi->update($id, $data);
				if ($update) {
					$this->session->set_flashdata('exe', 'Yosh... Data visi misi berhasil diperbarui!');
				} else {
					$this->session->set_flashdata('exe', 'Oops... Data visi misi gagal diperbarui!');
				}

				redirect(adminRoute('visi-misi'));
			}
		}
	}

	public function delete($id)
	{
		if (!empty(trim($id))) {
			$delete = $this->Visi_Misi->delete($id);
			if ($delete) {
				$this->session->set_flashdata('exe', 'Yosh... Data visi misi berhasil dihapus!');
			} else {
				$this->session->set_flashdata('exe', 'Oops... Data visi misi gagal dihapus!');
			}

			redirect(adminRoute('visi-misi'));
		} else {
			redirect(adminRoute('visi-misi'));
		}
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */