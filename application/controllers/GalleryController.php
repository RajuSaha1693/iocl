<?php


class GalleryController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('gallery');
        $this->load->library('session');
    }
    /*
    function for manage Gallery.
    return all Gallerys.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
	.....
    */
    public function manageGallery() { 
        $data['gallerys'] = $this->gallery->getAll();
        $data['_view'] = 'gallery/index-gallery';
        $data['_header']='Manage Gallery';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for  add Gallery get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addGallery() {
        $data['_view'] = 'gallery/add-gallery';
        $data['_header']='Add Photos';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for add Gallery post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function addGalleryPost() {
        $data['g_name'] = $this->input->post('g_name');
        $data['g_notes'] = $this->input->post('g_notes');
        if ($_FILES['g_location']['name']) { 
                $data['g_location'] = $this->doUpload('g_location');
            } 
        $this->gallery->insert($data);
        $this->session->set_flashdata('success', 'Gallery added Successfully');
        redirect('manage-gallery');
    }
    /*
    function for edit Gallery get
    returns  Gallery by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editGallery($gallery_id) {
        $data['gallery_id'] = $gallery_id;
        $data['gallery'] = $this->gallery->getDataById($gallery_id);
        $data['_view'] = 'gallery/edit-gallery';
        $data['_header']='Edit Gallery';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for edit Gallery post
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function editGalleryPost() {
        $gallery_id = $this->input->post('gallery_id');
        $gallery = $this->gallery->getDataById($gallery_id);
        $data['g_name'] = $this->input->post('g_name');
        $data['g_notes'] = $this->input->post('g_notes');
        if ($_FILES['g_location']['name']) { 
            $data['g_location'] = $this->doUpload('g_location');
            unlink('./uploads/gallery/'.$gallery[0]->g_location);
        } 
        $edit = $this->gallery->update($gallery_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Gallery Updated');
            redirect('manage-gallery');
        }
    }
    /*
    function for view Gallery get
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function viewGallery($gallery_id) {
        $data['gallery_id'] = $gallery_id;
        $data['gallery'] = $this->gallery->getDataById($gallery_id);
        $data['_view'] = 'gallery/view-gallery';
        $data['_header']='View Photos';
        $this->load->view('layouts/app',$data);
    }
    /*
    function for delete Gallery    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function deleteGallery($gallery_id) {
        $delete = $this->gallery->delete($gallery_id);
        $this->session->set_flashdata('success', 'gallery deleted');
        redirect('manage-gallery');
    }
    /*
    function for activation and deactivation of Gallery.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatusGallery($gallery_id) {
        $edit = $this->gallery->changeStatus($gallery_id);
        $this->session->set_flashdata('success', 'gallery '.$edit.' Successfully');
        redirect('manage-gallery');
    }
        /*
    function for upload files
    return uploaded file name.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    function doUpload($file) {
        $config['upload_path'] = './uploads/gallery';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload($file))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_form', $error);
            }
            else
            {
              $data = array('upload_data' => $this->upload->data());
              return $data['upload_data']['file_name'];
            }
        }
    
}