<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    // List all users
    public function index() {
        $this->load->model('UserModel');
        $data['users'] = $this->UserModel->getAllUsers();
        $this->load->view('users/index', $data);
    }

    // Show create form
    public function create() {
        $this->load->view('users/create');
    }

    // Store a new user
    public function store() {
        $this->load->model('UserModel');
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        ];
        $this->UserModel->insertUser($data);
        redirect('usercontroller/index');
    }

    // Show edit form
    public function edit($id) {
        $this->load->model('UserModel');
        $data['user'] = $this->UserModel->getUserById($id);
        $this->load->view('users/edit', $data);
    }

    // Update user data
    public function update($id) {
        $this->load->model('UserModel');
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        ];
        $this->UserModel->updateUser($id,$data);
        redirect('usercontroller/index');
    }

    // Delete a user
    public function delete($id) {
        $this->load->model('UserModel');
        $this->UserModel->deleteUser($id);
        redirect('usercontroller/index');
    }
}