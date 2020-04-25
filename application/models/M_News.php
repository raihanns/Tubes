<?php

class M_News extends CI_model
{

    public function getAllNews()
    {
        return $this->db->get('news')->result_array();
    }

    public function insertNews($data)
    {
        return $this->db->insert('news', $data);
    }

    public function editNews($id)
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'slot' => $this->input->post('slot')
        ];
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function deleteNews($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }

    public function getNewsById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('news')->row_array();
    }
}
