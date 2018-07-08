<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		if ($this->main_lib->isLogin()) {
			redirect(base_url('dashboard'));
		}

		if (isset($_POST['login'])) {
			$post = $this->input->post();
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters("<p style='text-align:left;margin-top:2.5px;color:#FF0000;' class='text-danger'>","</p>");

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('auth/login');
			} else {
				$user = $post['username'];
				$pass = $post['password'];
				$login = $this->Admin_model->login($user, $pass);

				if ($login == TRUE) {
					redirect(base_url('dashboard'));
				} else {
					redirect(base_url('auth'));
				}
			}

		} else {
			$this->load->view('auth/login');
		}
	}

	public function logout()
	{
		if (isset($_POST['logout'])) {
			if ($_POST['logout'] == 1) {
				$this->session->sess_destroy();
				redirect(base_url('auth'));
			}
		} else {
			redirect(base_url('dashboard'));
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */