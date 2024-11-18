<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
     
    }
	public function index()
	{
		$data = array();
        $data['active'] = "Verification";
        $data['title'] =  "Verification";
       // $data['allCus'] = $this->main_model->CustomerListDashboard();
       // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
        $this->load->view('front/verification', $data);
	}

    public function users(){
        $data = array();
        $id = $_GET['v'];
        $data['active'] = "Verification";
        $data['title'] =  "Verification";
        $data['allPdt']   = $this->main_model->VerificationData($id);
        $this->load->view('front/verification', $data);
    }


}