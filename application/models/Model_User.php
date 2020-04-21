<?php

class Model_User extends CI_model
{
  public function getAllUser()
	{
		return $this->db->get('user')->result_array();
	}

  public function insertUser()
	{
    $data = [
        'nama_depan' => $this->input->post('nama_depan', true),
        'nama_belakang' => $this->input->post('nama_belakang', true),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email', true),
        'password' => $this->input->post('password'),
        'image' => 'default.jpg',
        'role_id' => 2,
        'date_created' => time()
    ];
    $this->db->insert('user', $data);
	}

  public function editUser($id)
	{
    $data = [
        'nama_depan' => $this->input->post('nama_depan', true),
        'nama_belakang' => $this->input->post('nama_belakang', true),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email', true),
        'password' => $this->input->post('password'),
        'image' => 'default.jpg'
    ];
    $this->db->where('id',$id);
		$this->db->update('user',$data);
	}

  public function deleteUser($id)
  {
  	$this->db->where('id',$id);
  	$this->db->delete('user');
  }

  public function getUserById($id)
  {
  	$this->db->where('id',$id);
  	return $this->db->get('user')->row_array();
  }
} ?>
