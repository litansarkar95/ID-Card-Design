<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }
	public function index()
	{
		$data = array();
        $data['active'] = "dashboard";
        $data['title'] =  "Dashboard";

       $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('layout/master', $data);
	}


}