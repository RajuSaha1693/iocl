<?php


class Todays_wordController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('todays_word');
        $this->load->library('session');
    }
    /*
    function for manage Todays_word.
    return all Todays_words.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
	.....
    */
    public function manageTodays_word() { 
        $data['todays_words'] = $this->todays_word->getAll();
        $data['_view'] = 'todays_word/index-todays_word';
        $data['_header']='Manage Todays Word';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for  add Todays_word get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addTodays_word() {
        $data['_view'] = 'todays_word/add-todays_word';
        $data['_header']='Todays Word';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for add Todays_word post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addTodays_wordPost() {
        $data['t_word'] = $this->input->post('t_word');
        $data['t_meaning'] = $this->input->post('t_meaning');
        $this->todays_word->insert($data);
        $this->session->set_flashdata('success', 'Todays_word added Successfully');
        redirect('manage-todays_word');
    }
    /*
    function for edit Todays_word get
    returns  Todays_word by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editTodays_word($todays_word_id) {
        $data['todays_word_id'] = $todays_word_id;
        $data['todays_word'] = $this->todays_word->getDataById($todays_word_id);
        $data['_view'] = 'todays_word/edit-todays_word';
        $data['_header']='Edit Todays Word';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for edit Todays_word post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editTodays_wordPost() {
        $todays_word_id = $this->input->post('todays_word_id');
        $todays_word = $this->todays_word->getDataById($todays_word_id);
        $data['t_word'] = $this->input->post('t_word');
        $data['t_meaning'] = $this->input->post('t_meaning');
        $edit = $this->todays_word->update($todays_word_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Todays_word Updated');
            redirect('manage-todays_word');
        }
    }
    /*
    function for view Todays_word get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function viewTodays_word($todays_word_id) {
        $data['todays_word_id'] = $todays_word_id;
        $data['todays_word'] = $this->todays_word->getDataById($todays_word_id);
        $data['_view'] = 'todays_word/view-todays_word';
        $data['_header']='View Todays Word';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for delete Todays_word    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function deleteTodays_word($todays_word_id) {
        $delete = $this->todays_word->delete($todays_word_id);
        $this->session->set_flashdata('success', 'todays_word deleted');
        redirect('manage-todays_word');
    }
    /*
    function for activation and deactivation of Todays_word.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatusTodays_word($todays_word_id) {
        $edit = $this->todays_word->changeStatus($todays_word_id);
        $this->session->set_flashdata('success', 'todays_word '.$edit.' Successfully');
        redirect('manage-todays_word');
    }
    
}