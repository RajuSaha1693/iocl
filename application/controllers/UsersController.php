<?php


class UsersController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users');
        $this->load->library('session');
    }
    /*
    function for manage Users.
    return all Userss.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
	.....
    */
    public function manageUsers() { 
        $data['users'] = $this->users->getAll();
        $data['_view'] = 'users/index';
        $data['_header']='Manage User';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for  add Users get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addUsers() {
        $data['_view'] = 'users/add';
        $data['_header']='Add User';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for add Users post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addUsersPost() {
        $data['u_name'] = $this->input->post('u_name');
        $data['u_password'] = md5($this->input->post('u_password'));
        $data['u_email'] = $this->input->post('u_email');
        $this->users->insert($data);
        $this->session->set_flashdata('success', 'Users added Successfully');
        redirect('manage-users');
    }
    /*
    function for edit Users get
    returns  Users by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editUsers($users_id) {
        $data['users_id'] = $users_id;
        $data['users'] = $this->users->getDataById($users_id);
        $data['_view'] = 'users/edit';
        $data['_header']='Edit User';
        $this->load->view('layouts/app', $data);
    }
    /*
    function for edit Users post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editUsersPost() {
        $users_id = $this->input->post('users_id');
        $users = $this->users->getDataById($users_id);
        $data['u_name'] = $this->input->post('u_name');
        $data['u_email'] = $this->input->post('u_email');
        $edit = $this->users->update($users_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Users Updated');
            redirect('manage-users');
        }
    }
    /*
    function for view Users get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function viewUsers($users_id) {
        $data['users_id'] = $users_id;
        $data['users'] = $this->users->getDataById($users_id);
        $data['_view'] = 'users/view';
        $data['_header']='View User';
        $this->load->view('layouts/view', $data);
    }
    /*
    function for delete Users    
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function deleteUsers($users_id) {
        $delete = $this->users->delete($users_id);
        $this->session->set_flashdata('success', 'users deleted');
        redirect('manage-users');
    }
    /*
    function for activation and deactivation of Users.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatusUsers($users_id) {
        $edit = $this->users->changeStatus($users_id);
        $this->session->set_flashdata('success', 'users '.$edit.' Successfully');
        redirect('manage-users');
    }
    
}