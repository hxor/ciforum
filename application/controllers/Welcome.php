<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Forum_model', 'forum');
	}

	public function index()
	{
		$main_view = 'pages/index';
		$general_forum = $this->forum->getGeneralForum();
		$forums = $this->forum->getCategoryForum();
		$this->load->view('layout/app', compact('main_view', 'general_forum', 'forums'));
	}
}
