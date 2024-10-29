<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
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
  


}