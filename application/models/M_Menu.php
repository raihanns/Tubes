<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Menu extends CI_Model
{
    public function getSubMenu()
    {

        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`

        ";
        return $this->db->query($query)->result_array();
    }

    public function getMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }

    public function deleteSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }
}
