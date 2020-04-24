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
      'id' => $this->input->post('id'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'spesialis' => $this->input->post('spesialis'),
      'jumlah_kamar' => $this->input->post('jumlah_kamar')
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
