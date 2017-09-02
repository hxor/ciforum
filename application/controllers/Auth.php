<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(['url', 'form']);
		$this->load->model('Auth_model', 'auth', true);
	}

	public function login()
	{
		if (!$_POST) {
			$input = (object) $this->auth->getDefaultLoginValues();
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->auth->validateLogin()) {
			$this->load->view('auth/login', compact('input'));
			return;
		}

		if (!$this->auth->login($input)) {
			redirect('login');
		} else {
			redirect('admin');
		}
	}

	public function signup() {
		if (!$_POST) {
			$input = (object) $this->auth->getDefaultSignUpValues();
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->auth->validateSignUp()) {
			$this->load->view('auth/signup', compact('input'));
			return;
		}

		if (!$this->auth->signup($input)) {
			redirect('auth/signup');
		} else {
			redirect('/');
		}
	}

	public function logout() {
		$this->auth->logout();
		redirect('/');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
