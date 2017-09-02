<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public $login;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->login = $this->session->userdata();
		if (!$this->login['login'] == true) {
			redirect('login');
		}
	}

	public function profile()
	{
		$main_view = 'pages/setting/profile';
		$user = $this->user->get($this->login['id']);
		if ($this->user->getProfile($this->login['id'])) {
			$user_profile = $this->user->getProfile($this->login['id']);
		} else {
			$user_profile =  [
				'id' => '#',
				'user_id' => $this->login['id'],
				'birthdate' => '0000-00-00',
				'address' => '#',
				'facebook' => '#',
				'twitter' => '#',
				'photo' => ''  
			];
		}
		if ($this->login['role'] == 'admin') {
			$this->load->view('layout/admin/app', compact('main_view', 'user', 'user_profile'));
		} else {
			$this->load->view('layout/app', compact('main_view', 'user', 'user_profile'));
		}
		
	}

	public function update_profile() {
		if (!$_POST) {
			$this->profile();
		} else {
			$input = (object) $this->input->post();
		}

		if ($_FILES['photo']['name']) {
			$config['upload_path']          = './upload/photo';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['file_name']	= "file_".time();
	 
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('photo')){
				echo var_dump($this->upload->display_errors());
			}else{
				$photo = $this->upload->data();
				$path = $config['upload_path'] . '/' . $photo['file_name'];
				$user_profile = [
					'id' => $this->input->post('id'),
					'user_id' => $this->input->post('id'),
					'birthdate' => $this->input->post('birthdate'),
					'address' => $this->input->post('address'),
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter'),
					'photo' => $path  
				];
				$user = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email')
				];
				$this->user->update_profile($user_profile['id'], $user_profile);
				$this->user->update($user_profile['id'], $user);
				redirect('setting/profile');
			}			
		} else {
			$user_profile = [
				'id' => $this->input->post('id'),
				'user_id' => $this->input->post('id'),
				'birthdate' => $this->input->post('birthdate'),
				'address' => $this->input->post('address'),
				'facebook' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'photo' => ''
			];

			$user = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email')
				];

			$this->user->update_profile($user_profile['id'], $user_profile);
			$this->user->update($user_profile['id'], $user);
			redirect('setting/profile');
		}
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */
