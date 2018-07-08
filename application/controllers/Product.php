<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->main_lib->isLogin()){
			redirect('auth');
		}
	}

	public function index()
	{
		$firstUri = $this->uri->segment(1);
		$secondUri = $this->uri->segment(2);
		if ($firstUri != "dashboard" && $secondUri != "product") {
			redirect(base_url('/'));
		} else {
			$data['product'] = $this->Product->all();
			$data['no'] = 1;
			$this->main_lib->getTemplates("product/index", $data);
		}
	}

	public function create()
	{
		if (isset($_POST['create'])) {
			$this->form_validation->set_rules('product', 'product', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->main_lib->getTemplates("product/create");
			} else {
				$post = $this->input->post();
				$slug = strtolower(str_replace(" ", "-", $post['product']));
				$data = [
					'produk'=> $post['product'],
					'konten'=> $post['konten'],
					'harga'	=> $post['harga'],
					'slug'  => $slug
				];

				$config['upload_path'] = './upload/images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				
				if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
					if ( ! $this->upload->do_upload('gambar')){
						$this->session->set_flashdata('exe', 'Oops.. Gagal upload gambar!');
						redirect(adminRoute('product/edit/'.$id));
					} else {
						$dataUpload = $this->upload->data();
						$gambar = $dataUpload['file_name'];
						$data['gambar'] = $gambar;
					}
				}

				$insert = $this->Product->insert($data);
				if ($insert) {
					$this->session->set_flashdata('exe', 'Yosh.. Tambah data baru berhasil!');
					redirect(adminRoute('product'));
				} else {
					$this->session->set_flashdata('exe', 'Oops.. Proses tambah data gagal!');
					redirect(adminRoute('product/create'));
				}
			}
		} else {
			$this->main_lib->getTemplates("product/create");
		}
	}

	public function edit($id)
	{
		if (!empty(trim($id))) {
			$data['product'] = $this->Product->findById($id);
			$this->main_lib->getTemplates("product/edit", $data);
		} else {
			redirect(adminRoute('product'));
		}
	}

	public function update($id)
	{
		if (empty(trim($id)) || !isset($_POST['update'])) {
			redirect(adminRoute('product'));
		} else {
			$this->form_validation->set_rules('product', 'product', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$data['product'] = $this->Product->findById($id);
				$this->main_lib->getTemplates("product/edit", $data);
			} else {
				$post = $this->input->post();
				$data = [
					'produk'=> $post['product'],
					'konten'=> $post['konten'],
					'harga'	=> $post['harga'],
				];

				$config['upload_path'] = './upload/images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
					if ( ! $this->upload->do_upload('gambar')){
						$this->session->set_flashdata('exe', 'Oops.. Gagal upload gambar!');
						redirect(adminRoute('product/edit/'.$id));
					} else {
						$dataUpload = $this->upload->data();
						$gambar = $dataUpload['file_name'];
						$data['gambar'] = $gambar;
					}
				}

				$update = $this->Product->update($id, $data);
				if ($update) {
					$this->session->set_flashdata('exe', 'Yosh... Data product berhasil diperbarui!');
				} else {
					$this->session->set_flashdata('exe', 'Oops... Data product gagal diperbarui!');
					redirect(adminRoute('product/edit/'.$id));
				}

				redirect(adminRoute('product'));
			}
		}
	}

	public function delete($id)
	{
		if (!empty(trim($id))) {
			$delete = $this->Product->delete($id);
			if ($delete) {
				$this->session->set_flashdata('exe', 'Yosh... Data product berhasil dihapus!');
			} else {
				$this->session->set_flashdata('exe', 'Oops... Data product gagal dihapus!');
			}

			redirect(adminRoute('product'));
		} else {
			redirect(adminRoute('product'));
		}
	}
}

/* End of file product.php */
/* Location: ./application/controllers/product.php */