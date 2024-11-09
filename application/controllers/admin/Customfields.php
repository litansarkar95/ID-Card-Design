<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customfields extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
        if($myid ==null){
            redirect(base_url() . "authentication", "refresh");
        }
          
     
    }
	public function index()
	{
        $this->form_validation->set_rules("company_name", "Company Name", "required");
        $this->form_validation->set_rules("title", "Title", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
          $organization_id = $this->session->userdata('loggedin_id');
   
          $code_random = $this->main_model->number_generator("org_fields",$organization_id);

          $y= date('y');
          $m=date('m');

          $code = $y.$m.$organization_id.str_pad($code_random,3,"0",STR_PAD_LEFT);

        
          $data = array(   
              "date_code"                         => date('y'),
              "month_code"                        => date('m'),
              "code_random"                       => $code_random,
              "code_no"                           => $code, 
              "agent_id"                          => $this->session->userdata('loggedin_id'),
              "organization_id"                   => $this->common_model->xss_clean($this->input->post("company_name")),
              "title"                             => $this->common_model->xss_clean($this->input->post("title")),
              "description"                       => $this->common_model->xss_clean($this->input->post("description")),
              "is_name_en"                        => $this->common_model->xss_clean($this->input->post("is_name_en")),
              "is_name_bn"                        => $this->common_model->xss_clean($this->input->post("is_name_bn")),
              "is_father_name_en"                 => $this->common_model->xss_clean($this->input->post("is_father_name_en")),
              "is_father_name_bn"                 => $this->common_model->xss_clean($this->input->post("is_father_name_bn")),
              "is_mother_name_en"                 => $this->common_model->xss_clean($this->input->post("is_mother_name_en")),
              "is_mother_name_bn"                 => $this->common_model->xss_clean($this->input->post("is_mother_name_bn")),
              "is_mobile_no"                      => $this->common_model->xss_clean($this->input->post("is_mobile_no")),
              "is_email"                          => $this->common_model->xss_clean($this->input->post("is_email")),
              "is_village_en"                     => $this->common_model->xss_clean($this->input->post("is_village_en")),
              "is_village_bn"                     => $this->common_model->xss_clean($this->input->post("is_village_bn")),
              "is_post_office_en"                 => $this->common_model->xss_clean($this->input->post("is_post_office_en")),
              "is_post_office_bn"                 => $this->common_model->xss_clean($this->input->post("is_post_office_bn")),
              "is_upazila_en"                     => $this->common_model->xss_clean($this->input->post("is_upazila_en")),
              "is_upazila_bn"                     => $this->common_model->xss_clean($this->input->post("is_upazila_bn")),
              "is_zilla_en"                       => $this->common_model->xss_clean($this->input->post("is_zilla_en")),
              "is_zilla_bn"                       => $this->common_model->xss_clean($this->input->post("is_zilla_bn")),
              "is_present_address_en"             => $this->common_model->xss_clean($this->input->post("is_present_address_en")),
              "is_present_address_bn"             => $this->common_model->xss_clean($this->input->post("is_present_address_bn")),
              "is_permanent_address_en"           => $this->common_model->xss_clean($this->input->post("is_permanent_address_en")),
              "is_permanent_address_bn"           => $this->common_model->xss_clean($this->input->post("is_permanent_address_bn")),
              "is_designation"                    => $this->common_model->xss_clean($this->input->post("is_designation")),
              "is_department"                     => $this->common_model->xss_clean($this->input->post("is_department")),
              "is_employee_id"                    => $this->common_model->xss_clean($this->input->post("is_employee_id")),
              "is_index_no"                       => $this->common_model->xss_clean($this->input->post("is_index_no")),
              "is_class"                          => $this->common_model->xss_clean($this->input->post("is_class")),
              "is_class_roll"                     => $this->common_model->xss_clean($this->input->post("is_class_roll")),
              "is_sessions"                       => $this->common_model->xss_clean($this->input->post("is_sessions")),
              "is_date_of_birth"                  => $this->common_model->xss_clean($this->input->post("is_date_of_birth")),
              "is_gender"                         => $this->common_model->xss_clean($this->input->post("is_gender")),
              "is_id_number"                      => $this->common_model->xss_clean($this->input->post("is_id_number")),
              "is_blood_group"                    => $this->common_model->xss_clean($this->input->post("is_blood_group")),
              "is_marital_status"                 => $this->common_model->xss_clean($this->input->post("is_marital_status")),
              "is_photo"                          => $this->common_model->xss_clean($this->input->post("is_photo")),
              "is_signature"                      => $this->common_model->xss_clean($this->input->post("is_signature")),
              "is_nationality"                    => $this->common_model->xss_clean($this->input->post("is_nationality")),
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