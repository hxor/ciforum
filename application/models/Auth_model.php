<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public $table = 'users';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDefaultLoginValues() {
		return [
			'username' => '',
			'password' => ''
		];
	}

	public function getValidationLoginRules() {
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			]
		];
	}

	public function validateLogin(){
		$this->load->library('form_validation');
		$rules = $this->getValidationLoginRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<span class="form-error">', '</span>');
		return $this->form_validation->run();
	}

	public function login($input) {
		$input->password = md5($input->password);
		$user = $this->db->where('email', $input->email)
							->where('password', $input->password)
							->get($this->table)
							->row();

		if (!$user->is_active == 0) {
			if (count($user)) {
				$sess_data = [
					'login' => true,
					'name' => $user->name,
					'id' => $user->id,
					'email' => $user->email,
					'role' => $user->role,
				];
				$this->session->set_userdata($sess_data);
				return true;
			}
			return false;
		}

		return false;		
	}

	public function getDefaultSignUpValues() {
		return [
			'name' => '',
			'email' => '',
			'password' => '',
			'confirm_password' => ''
		];
	}

	public function getValidationSignUpRules() {
		return [
			[
				'field' => 'name',
				'label' => 'Name',
				'rule' => 'required',
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[users.email]'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
			], 
			[
				'field' => 'confirm_password',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]' 
			]
		];
	}

	public function validateSignUp() {
		$this->load->library('form_validation');
		$rules = $this->getValidationSignUpRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<span class="form-error">', '</span>');
		return $this->form_validation->run();
	}

	public function signup($input) {
		$data = [
			'name' => $input->name,
			'email' => $input->email,
			'password' => md5($input->password),
			'role' => 'member',
			'is_active' => 1
		];
		$this->db->insert($this->table, $data);

		$sess_data = [
			'login' => true,
			'id' => $this->db->insert_id(),
			'name' => $data['name'],
			'email' => $data['email'],
			'role' => $data['role'],
		];
		$this->session->set_userdata($sess_data);
		return true;

	}


	public function logout() {
		$sess_data = ['login', 'id', 'email', 'role'];
		$this->session->unset_userdata($sess_data);
		$this->session->sess_destroy();
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
