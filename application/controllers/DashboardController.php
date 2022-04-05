<?php


class DashboardController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index(){
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/app',$data);
    }
}