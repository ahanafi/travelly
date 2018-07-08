<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_lib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function getTemplates($file, $data = array())
	{
		$this->ci->load->view("layouts/admin/header", $data);
		$this->ci->load->view("layouts/admin/sidebar");
		$this->ci->load->view($file);
		$this->ci->load->view("layouts/admin/footer");
	}

	public function getFrontTemplates($file, $data = array())
	{
		$this->ci->load->view("layouts/front/header", $data);
		$this->ci->load->view($file);
		$this->ci->load->view("layouts/front/footer");
	}

	public function isLogin()
	{
		return (
			$this->ci->session->is_login === TRUE && isset($this->ci->session->user)
		) ? TRUE : FALSE;
	}

	public function showBreadCrumb()
	{
		$total_segment = $this->ci->uri->total_segments();

		$html = "<ol class='breadcrumb'>";
		$html .= "<li><a href='".base_url('dashboard')."'><i class='fa fa-dashboard'></i> Home</a></li>";
		$class = "active";
		for ($i = 2; $i <= $total_segment; $i++) {
			$uri = $this->ci->uri->segment($i);
			if ($i == $total_segment) {
				$html .= "<li class='".$class."'>".ucfirst($uri)."</li>";
			} else {
				$html .= "<li><a href='".base_url('dashboard/'.$uri)."'>".ucfirst($uri)."</a></li>";
			}
		}
		$html .= "</ol>";

		return $html;
	}

	

}

/* End of file main_lib.php */
/* Location: ./application/libraries/main_lib.php */
