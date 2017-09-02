<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $table = 'users';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get($id) {
		return $this->db->where('id', $id)
				->get($this->table)
				->row();
	}

	public function getProfile($id){
		return $this->db->where('user_id', $id)
				->get('user_profile')
				->row_array();
	}

	public function update($id, $data) {
		return $this->db->where('id', $id)
				->update($this->table, $data);
	}

	public function update_profile($id, $data) {
		if ($this->getProfile($id)) {
			return $this->db->where('user_id', $id)
				->update('user_profile', $data);
		} else {
			$this->db->insert('user_profile', $data);
		    return $this->db->insert_id();
		}
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
