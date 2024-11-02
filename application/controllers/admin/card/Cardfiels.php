<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardfiels extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }



    public function index($id){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Card Design";
        $data['allCat'] = $this->main_model->CustomDesignfieldsList();
      //  $data['allPdt'] = $this->main_model->UsersList();
        $data['content'] = $this->load->view("admin/card/card-design", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


}