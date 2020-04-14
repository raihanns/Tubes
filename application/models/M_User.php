<?php
class M_User extends CI_Model{

	protected $_table = 'users';

	public function check_username($username){
		return (sizeof($this->db->get_where($this->_table, ['username', $username])->result_array()[0]) > 0);
	}


	public function insert_new_user($data){
		return $this->db->insert('users', $data);
	}

	public function get_user($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		$this->db->where('username', $username);
		$data = $this->db->get($this->_table)->result_array();
		return $data;
	}
}
?>