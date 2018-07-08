<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['products'] = $this->Product->all(3);
		$this->main_lib->getFrontTemplates("front/index", $data);
	}

	public function profile()
	{
		$id = 1;
		$data['profile'] = $this->Profile->findById($id);
		$this->main_lib->getFrontTemplates("front/profile", $data);
	}

	public function product($slug = NULL)
	{
		if(!empty(trim($slug))) {
			$data['product'] = $this->Product->getBySlug($slug);
			$this->main_lib->getFrontTemplates("front/product", $data);
		} else {
			$data['products'] = $this->Product->all();
			$this->main_lib->getFrontTemplates("front/all_product", $data);
		}
	}

	public function visi_misi()
	{
		$id = 1;
		$data['vms'] = $this->Visi_Misi->findById($id);
		$this->main_lib->getFrontTemplates("front/visi-misi", $data);
	}

	public function search()
	{
		$keyword = $this->input->get('keyword', TRUE);
		$data['products'] = $this->Product->search($keyword);
		$this->main_lib->getFrontTemplates("front/results", $data);
	}

}

/* End of file Front.php */
/* Location: ./application/controllers/Front.php */