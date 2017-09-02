<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$login = $this->session->userdata();
		$this->load->model('Forum_model', 'forum');
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
		echo "admin/forum";
	}

	public function forum_category(){
		$main_view = 'pages/admin/forum/category';
		$categories = $this->forum->get_forum_categories();
		$this->load->view('layout/admin/app', compact('main_view', 'categories'));
	}

	public function create_category(){
		// Checking if the request post or get
		if (!$_POST) {
			$input = (object) $this->forum->getCategoryDefaultValue();
		} else {
			$input = (object) $this->input->post();
		}

		// If Validate = false, go to form view
		if (!$this->forum->validateCategory()) {
			$main_view = 'pages/admin/forum/category_form';
			$form_action = 'admin/forum/create_category';
			$this->load->view('layout/admin/app', compact('main_view', 'form_action', 'input'));
			return ;
		}

		// else
		$this->forum->create_category($input);
		redirect('admin/forum/forum_category');
	}

	public function category_edit($id = null) {
		$category = $this->forum->get_category($id);
		if (!$category) redirect('admin/forum/forum_category');

		if (!$_POST) {
			$input = (object) $category;
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->forum->validateCategory()) {
			$main_view = 'pages/admin/forum/category_form';
			$form_action = "admin/forum/category_edit/$id";
			$this->load->view('layout/admin/app', compact('main_view', 'form_action', 'input'));
			return ;
		}

		$this->forum->update_category($id, $input);
		redirect('admin/forum/forum_category');
	}

	public function category_delete() {
		$id = $this->input->post('id');
		$category = $this->forum->get_category($id);

		if (!$category) redirect('admin/forum/forum_category');

		$this->forum->delete_category($id);
		redirect('admin/forum/forum_category');
	}

}

/* End of file Forum.php */
/* Location: ./application/controllers/Forum.php */
