<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function _show404()
	{
		$firstUri = $this->uri->segment(1);
		if ($firstUri == "dashboard") {
			$this->main_lib->getTemplates("layouts/admin/404");
		} else {
			$this->main_lib->getFrontTemplates("layouts/front/404");
		}
	}

}

/* End of file Errors.php */
/* Location: ./application/controllers/Errors.php */