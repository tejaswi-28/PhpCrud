<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function getAllUsers() {
        return $this->db->get('users')->result_array();
    }

    public function insertUser($data) {
        $this->db->insert('users', $data);
    }

    public function getUserById($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function updateUser($id, $data) {
       $record= $this->db->where('id', $id);
    //    print_r($record);die();
        $this->db->update('users', $data);

    }

    public function deleteUser($id) {
        $this->db->delete('users', ['id' => $id]);
    }
}
