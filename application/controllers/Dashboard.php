<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->main_lib->isLogin()) {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data = array(
			'users'		=> count($this->Users->all()),
			'product'	=> count($this->Product->all()),
			'profile'	=> count($this->Profile->all()),
			'visi_misi' => count($this->Visi_Misi->all()),
		);
		$this->main_lib->getTemplates("index", $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */