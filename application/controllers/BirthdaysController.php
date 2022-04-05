<?php


class BirthdaysController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('birthdays');
        $this->load->library('session');
    }
    /*
    function for manage Birthdays.
    return all Birthdayss.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
	.....
    */
    public function manageBirthdays() { 
        $data['birthdays'] = $this->birthdays->getAll();
        $data['_view'] = 'birthdays/index-birthdays';
        $data['_header']='Manage Birthdays';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for  add Birthdays get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addBirthdays() {
        $data['_view'] = 'birthdays/add-birthdays';
        $data['_header']='New Birthday';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for add Birthdays post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addBirthdaysPost() {
        $data['b_name'] = $this->input->post('b_name');
        $data['b_date'] = $this->input->post('b_date');
    $this->birthdays->insert($data);
        $this->session->set_flashdata('success', 'Birthdays added Successfully');
        redirect('manage-birthdays');
    }
    /*
    function for edit Birthdays get
    returns  Birthdays by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editBirthdays($birthdays_id) {
        $data['birthdays_id'] = $birthdays_id;
        $data['birthdays'] = $this->birthdays->getDataById($birthdays_id);
        $data['_view'] = 'birthdays/edit-birthdays';
        $data['_header']='Edit Birthday';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for edit Birthdays post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editBirthdaysPost() {
        $birthdays_id = $this->input->post('birthdays_id');
        $birthdays = $this->birthdays->getDataById($birthdays_id);
        $data['b_name'] = $this->input->post('b_name');
        $data['b_date'] = $this->input->post('b_date');
    $edit = $this->birthdays->update($birthdays_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Birthdays Updated');
            redirect('manage-birthdays');
        }
    }
    /*
    function for view Birthdays get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function viewBirthdays($birthdays_id) {
        $data['birthdays_id'] = $birthdays_id;
        $data['birthdays'] = $this->birthdays->getDataById($birthdays_id);
        $data['_view'] = 'birthdays/view-birthdays';
        $data['_header']='View Birthday';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for delete Birthdays    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function deleteBirthdays($birthdays_id) {
        $delete = $this->birthdays->delete($birthdays_id);
        $this->session->set_flashdata('success', 'birthdays deleted');
        redirect('manage-birthdays');
    }
    /*
    function for activation and deactivation of Birthdays.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatusBirthdays($birthdays_id) {
        $edit = $this->birthdays->changeStatus($birthdays_id);
        $this->session->set_flashdata('success', 'birthdays '.$edit.' Successfully');
        redirect('manage-birthdays');
    }
    
}