<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum_model extends CI_Model {

	public $tableCategory = 'forum_category';
	public $tableForum = 'forum';
	public $tableRoom = 'forum_room';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_forum_categories(){
		return $this->db->get('forum_category')->result();
	}

	// give default value to the form
	public function getCategoryDefaultValue() {
		return [
			'slug' => '',
			'category' => ''
		];
	}

	public function getCategoryValidationRules() {
		return [
			[
				'field' => 'slug',
				'label' => 'Slug',
				'rules' => 'trim|required'
			],[
				'field' => 'category',
				'label' => 'Category Forum',
				'rules' => 'trim|required'
			]
		];
	}

	public function validateCategory() {
		$rules = $this->getCategoryValidationRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
		return $this->form_validation->run();
	}

	public function get_category($id) {
		return $this->db->where('id', $id)
				->get('forum_category')
				->row();
	}

	public function create_category($data) {
		$this->db->insert('forum_category', $data);
		return $this->db->insert_id();
	}

	public function update_category($id, $data) {
		return $this->db->where('id', $id)->update('forum_category', $data);
	}

	public function delete_category($id) {
		$this->db->where('id', $id)
			->delete('forum_category');
	}

	public function getGeneralForum(){
		return $this->db->where('slug', 'general-forum')->get('forum_category')->row();
	}

	public function getCategoryForum(){
		return $this->db->not_like('slug', 'general-forum')->get('forum_category')->result();
	}

}

/* End of file Forum_model.php */
/* Location: ./application/models/Forum_model.php */
