<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	
		$data['_view'] = 'welcome_message';
        $this->load->view('layouts/home',$data);
	}
	public function gallery(){
		$data['_view'] = 'gallery';
        $data['_header']='Gallery';
        $this->load->view('layouts/home',$data);
	}
}
