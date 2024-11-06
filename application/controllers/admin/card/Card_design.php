<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_design extends CI_Controller {

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
        $data['title'] =  "Card Design";
      //  $data['allPdt'] = $this->main_model->UsersList();
        $data['content'] = $this->load->view("admin/card/card-design", $data, TRUE);
        $this->load->view('layout/master', $data);
	}
  
    public function  design001(){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Card Design";
      //  $data['allPdt'] = $this->main_model->UsersList();
        $data['content'] = $this->load->view("admin/card/card-design-001", $data, TRUE);
        $this->load->view('admin/card/card-design-001', $data);
	}

  public function  design002(){
    $data = array();
    $data['active'] = "users";
    $data['title'] =  "Card Design";
  //  $data['allPdt'] = $this->main_model->UsersList();
    $this->load->view('admin/card/card-design-011', $data);
}

}