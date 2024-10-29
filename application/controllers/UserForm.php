<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserForm extends CI_Controller {

    public function __construct() {
        parent::__construct();

     
    }
	public function index()
	{

       
		$data = array();
        $id = $_GET['v'];
        $data['active'] = "dashboard";
        $data['title'] =  "Dashboard";
        $data['allPdt'] = $this->main_model->CustomfieldsList($id);
      // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('front/user-form', $data);
	}


    public function userformsubmit(){
        $this->form_validation->set_rules("full_name", "Name", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            $organization_id = $this->common_model->xss_clean($this->input->post("organization_id"));
            $code_random = $this->main_model->number_generator("users_fields",$organization_id);

            $y= date('y');
            $m=date('m');
  
            $code = $y.$m.$organization_id.str_pad($code_random,3,"0",STR_PAD_LEFT);
          
            $data = array(  
                "ip_address"                        => $_SERVER['REMOTE_ADDR'],
                "date_code"                         => date('y'),
                "month_code"                        => date('m'),
                "code_random"                       => $code_random,
                "registration_no"                   => $code, 
                "organization_id"                   => $this->common_model->xss_clean($this->input->post("organization_id")),
                "org_fields_id"                     => $this->common_model->xss_clean($this->input->post("id")),
                "name"                              => $this->common_model->xss_clean($this->input->post("full_name")),
                "designation"                       => $this->common_model->xss_clean($this->input->post("is_designation")),
                "department"                        => $this->common_model->xss_clean($this->input->post("is_department")),
                "date_of_birth"                     => strtotime($this->common_model->xss_clean($this->input->post("is_date_of_birth"))),
                "gender"                            => $this->common_model->xss_clean($this->input->post("is_gender")),
                "marital_status"                    => $this->common_model->xss_clean($this->input->post("is_marital_status")),
                "present_address"                   => $this->common_model->xss_clean($this->input->post("is_present_address")),
                "permanent_address"                 => $this->common_model->xss_clean($this->input->post("is_permanent_address")),
                "id_number"                         => $this->common_model->xss_clean($this->input->post("is_id_number")),
                "blood_group"                       => $this->common_model->xss_clean($this->input->post("is_blood_group")),
                "nationality"                       => $this->common_model->xss_clean($this->input->post("is_nationality")),
                "mobile_no"                         => $this->common_model->xss_clean($this->input->post("is_mobile_no")),
                "email"                             => $this->common_model->xss_clean($this->input->post("is_email")),
                "is_active"                         => 1,
                "create_date"                       => strtotime($date),
               
            );

  
            if ($_FILES['pic']['name'] != "") {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
                $config['upload_path'] = "./public/static/images/users/";
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload("pic")) {
                    $data['photo'] = $this->upload->data('file_name');
                    //$arrayMsg['enc_name'] = "1";
                }
            }else{
                $data['photo'] = "0.png";
            }
        
          if ($this->common_model->save_data("users_fields", $data)) {
            $id=$this->common_model->Id;
          
            $this->session->set_flashdata('success', 'Save Successfully');
            }else{
                $this->session->set_flashdata('error', 'Server error.');
            }
            redirect(base_url() . "thanks", "refresh");
        }
   
        $data = array();
        $id = $_GET['v'];
        $data['active'] = "dashboard";
        $data['title'] =  "Dashboard";
        $data['allPdt'] = $this->main_model->CustomfieldsList($id);
      // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('front/user-form', $data);
    }
    public function thanks(){
        $data = array();
        $id = $_GET['v'];
        $data['active'] = "thanks";
        $data['title'] =  "Thanks";
       
      // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('front/thanks', $data);
    }

}