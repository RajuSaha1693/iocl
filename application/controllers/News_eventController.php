<?php


class News_eventController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_event');
        $this->load->library('session');
    }
    /*
    function for manage News_event.
    return all News_events.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
	.....
    */
    public function manageNews_event() { 
        $data['news_events'] = $this->news_event->getAll();
        $data['_view'] = 'news_event/index-news_event';
        $data['_header']='Manage News & Events';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for  add News_event get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addNews_event() {
        $data['_view'] = 'news_event/add-news_event';
        $data['_header']='New News & Events';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for add News_event post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addNews_eventPost() {
        $data['n_head'] = $this->input->post('n_head');
        $data['n_description'] = $this->input->post('n_description');
        $this->news_event->insert($data);
        $this->session->set_flashdata('success', 'News_event added Successfully');
        redirect('manage-news_event');
    }
    /*
    function for edit News_event get
    returns  News_event by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editNews_event($news_event_id) {
        $data['news_event_id'] = $news_event_id;
        $data['news_event'] = $this->news_event->getDataById($news_event_id);
        $data['_view'] = 'news_event/edit-news_event';
        $data['_header']='Edit News & Events';
        $this->load->view('layouts/app',$data);
        
    }
    /*
    function for edit News_event post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editNews_eventPost() {
        $news_event_id = $this->input->post('news_event_id');
        $news_event = $this->news_event->getDataById($news_event_id);
        $data['n_head'] = $this->input->post('n_head');
        $data['n_description'] = $this->input->post('n_description');
        $edit = $this->news_event->update($news_event_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'News_event Updated');
            redirect('manage-news_event');
        }
    }
    /*
    function for view News_event get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function viewNews_event($news_event_id) {
        $data['news_event_id'] = $news_event_id;
        $data['news_event'] = $this->news_event->getDataById($news_event_id);
        $data['_view'] = 'news_event/view-news_event';
        $data['_header']='View News & Events';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for delete News_event    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function deleteNews_event($news_event_id) {
        $delete = $this->news_event->delete($news_event_id);
        $this->session->set_flashdata('success', 'news_event deleted');
        redirect('manage-news_event');
    }
    /*
    function for activation and deactivation of News_event.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatusNews_event($news_event_id) {
        $edit = $this->news_event->changeStatus($news_event_id);
        $this->session->set_flashdata('success', 'news_event '.$edit.' Successfully');
        redirect('manage-news_event');
    }
    
}