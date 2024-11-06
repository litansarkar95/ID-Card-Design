<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
         if($myid ==null){
             redirect(base_url() . "authentication", "refresh");
         }
          
     
    }
	public function index()
	{
		$data = array();
        $data['active'] = "dashboard";
        $data['title'] =  "Dashboard";
        $data['allCus'] = $this->main_model->CustomerListDashboard();
       $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('layout/master', $data);
	}


}