<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$login = $this->session->userdata();
		if ($login['login'] == true) {
			if ($login['role'] == 'admin') {
				return;
			} else {
				redirect('/');
			}
		} else {
			redirect('login');
		}
	}

	public function index()
	{
		$main_view = 'pages/admin/index';
		$this->load->view('layout/admin/app', compact('main_view'));
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
