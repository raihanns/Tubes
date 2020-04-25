<?php

class M_Hospital extends CI_model
{

  public function getAllHospital()
  {
    return $this->db->get('hospital')->result_array();
  }

  public function insertHospital($data)
  {
    return $this->db->insert('hospital', $data);
  }

  public function editHospital($id)
  {
        $data = [
          'id' => $this->input->post('id'),
          'nama' => $this->input->post('nama'),
          'alamat' => $this->input->post('alamat'),
          'slot' => $this->input->post('slot')
        ];
     $this->db->where('id', $id);
     $this->db->update('hospital', $data);
  }

  public function deleteHospital($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('hospital');
  }

  public function getHospitalById($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('hospital')->row_array();
  }
}
