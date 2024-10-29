<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customfields extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }
	public function index()
	{
        $this->form_validation->set_rules("company_name", "Company Name", "required");
        $this->form_validation->set_rules("title", "Title", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
        
          $data = array(   
      
              "organization_id"                   => $this->common_model->xss_clean($this->input->post("company_name")),
              "title"                             => $this->common_model->xss_clean($this->input->post("title")),
              "description"                       => $this->common_model->xss_clean($this->input->post("description")),
              "is_name"                           => $this->common_model->xss_clean($this->input->post("is_name")),
              "is_designation"                    => $this->common_model->xss_clean($this->input->post("is_designation")),
              "is_department"                     => $this->common_model->xss_clean($this->input->post("is_department")),
              "is_card_name"                      => $this->common_model->xss_clean($this->input->post("is_card_name")),
              "is_date_of_birth"                  => $this->common_model->xss_clean($this->input->post("is_date_of_birth")),
              "is_gender"                         => $this->common_model->xss_clean($this->input->post("is_gender")),
              "is_present_address"                => $this->common_model->xss_clean($this->input->post("is_present_address")),
              "is_permanent_address"              => $this->common_model->xss_clean($this->input->post("is_permanent_address")),
              "is_id_number"                      => $this->common_model->xss_clean($this->input->post("is_id_number")),
              "is_blood_group"                    => $this->common_model->xss_clean($this->input->post("is_blood_group")),
              "is_issue_date"                     => $this->common_model->xss_clean($this->input->post("is_issue_date")),
              "is_expiry_date"                    => $this->common_model->xss_clean($this->input->post("is_expiry_date")),
              "is_nationality"                    => $this->common_model->xss_clean($this->input->post("is_nationality")),
              "is_photo"                          => $this->common_model->xss_clean($this->input->post("is_photo")),
              "is_mobile_no"                      => $this->common_model->xss_clean($this->input->post("is_mobile_no")),
              "is_email"                          => $this->common_model->xss_clean($this->input->post("is_email")),
              "is_active"                         => 1,
              "create_date"                       => strtotime($date),
             
          );

    
      
        if ($this->common_model->save_data("org_fields", $data)) {
          $id=$this->common_model->Id;
        
          $this->session->set_flashdata('success', 'Save Successfully');
          }else{
              $this->session->set_flashdata('error', 'Server error.');
          }
          redirect(base_url() . "admin/customfields/list", "refresh");
        }


		$data = array();
        $data['active'] = "customfields";
        $data['title'] =  "Custom fields";
        $data['allCat'] = $this->common_model->view_data("organizations", array("is_active" => 1), "name", "asc");
       $data['content'] = $this->load->view("admin/customfields-create", $data, TRUE);
       $this->load->view('layout/master', $data);
	}



    public function list(){
        $data = array();
        $data['active'] = "customfields";
        $data['title'] =  "Custom fields";
        $data['allPdt'] = $this->main_model->CustomfieldsList();
        $data['content'] = $this->load->view("admin/customfields-list", $data, TRUE);
        $this->load->view('layout/master', $data);
	}
  


}