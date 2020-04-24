<?php

class M_Hospital extends CI_model
{

  public function getAllHospital()
  {
    return $this->db->get('hospital')->result_array();
  }

  public function insertHosppital($data)
  {
    return $this->db->insert('hospital', $data);
  }

  public function editHosppital($id)
  {
    $data = [
      'nama_depan' => $this->input->post('nama_depan', true),
      'nama_belakang' => $this->input->post('nama_belakang', true),
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email', true),
      'password' => $this->input->post('password'),
      'image' => 'default.jpg'
    ];
    $this->db->where('id', $id);
    $this->db->update('hospital', $data);
  }

  public function deleteHosppital($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('hospital');
  }

  public function getHosppitalById($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('hospital')->row_array();
  }
}
