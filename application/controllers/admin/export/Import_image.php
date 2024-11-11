<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_image extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index(){
        $data = array();
        $data['active'] = "export";
        $data['title'] =  "export List";
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/export/import-image", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

    public function multiple_upload() {
      $check_name = $this->common_model->xss_clean($this->input->post("check_name"));
     


        $config['upload_path'] = './public/static/images/users/'; // Set your upload path
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 12048; // Set max size in KB
    
        $this->load->library('upload', $config);
    
        $images = $_FILES['images']; // Assume input field name is `images`
        $image_names = [];
    
        foreach ($images['name'] as $key => $image) {
            $_FILES['image[]']['name'] = $images['name'][$key];
            $_FILES['image[]']['type'] = $images['type'][$key];
            $_FILES['image[]']['tmp_name'] = $images['tmp_name'][$key];
            $_FILES['image[]']['error'] = $images['error'][$key];
            $_FILES['image[]']['size'] = $images['size'][$key];
    
            // Reinitialize upload library for each file
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('image[]')) {
                $fileData = $this->upload->data();
                $file_name_no_ext = pathinfo($fileData['file_name'], PATHINFO_FILENAME);
                $data['photo'] = $fileData['file_name'];
                $image_names[] = $file_name_no_ext;
            } else {
                // Handle upload error for this file
                $error = $this->upload->display_errors();
                echo "Error uploading file {$images['name'][$key]}: $error";
            }

        if($check_name == 'mobile_no'){
                $filesave =  $this->common_model->update_data("users_fields", $data,array("mobile_no"=> $file_name_no_ext));
            }else if($check_name == 'registration_no'){
                $filesave =  $this->common_model->update_data("users_fields", $data,array("registration_no"=> $file_name_no_ext));
            }

            else if($check_name == 'id'){
                $filesave =  $this->common_model->update_data("users_fields", $data,array("id"=> $file_name_no_ext));
            }
                      
        }
        if($filesave){

            $this->session->set_flashdata('success', 'Import  Successfully');
            redirect(base_url() . "admin/users", "refresh");
        }
        else{
            $this->session->set_flashdata('error', 'Something error.');
        }
        $this->session->set_userdata($sdata);
       redirect(base_url() . "admin/export/Import_image", "refresh");
    
        // $image_names now contains names of all successfully uploaded files without extensions
      //  print_r($image_names);
    }
}
