<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
         if($myid ==null){
             redirect(base_url() . "authentication", "refresh");
         }
          
     
    }



    public function index(){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users List";
        $data['allPdt'] = $this->main_model->UsersList();
        $data['content'] = $this->load->view("admin/users-list", $data, TRUE);
        $this->load->view('layout/master', $data);
	}

    public function design($id){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users List";
        $data['allPdt'] = $this->main_model->UsersList();
        $data['content'] = $this->load->view("admin/users-list", $data, TRUE);
        $this->load->view('admin/card/design-dynamic', $data);
    }
  
    public function delete($id) {
        $dt = $this->common_model->view_data("users_fields", array("id" => $id), "id", "asc");
        foreach ($dt as $pdt){
            $old_ext=$pdt->photo;
            $signature=$pdt->signature;
        }
        if(file_exists("public/static/images/users/{$old_ext}")){
            unlink("public/static/images/users/{$old_ext}");
        }
        if(file_exists("public/static/images/users/{$signature}")){
            unlink("public/static/images/users/{$signature}");
        }
        if ($dt) {
           
            $this->common_model->delete_data("users_fields", array("id" => $id));
        
            $this->session->set_flashdata('success', 'Delete Successfully');
        } else {
            $this->session->set_flashdata('error', 'Server error.');
        }
        $this->session->set_userdata($sdata);
        redirect(base_url() . "admin/users", "refresh");
    }


    
    public function edit($id){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users List";
        $data['allPdt'] = $this->main_model->UsersList($id);
        $data['content'] = $this->load->view("admin/users-edit", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


}