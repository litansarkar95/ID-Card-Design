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

        $org_id               = $this->input->post("org_id") ;
        $fields_id            = $this->input->post("fields_id") ;
        $users_id             = $this->input->post("users_id") ;
        $blood_group          = $this->input->post("blood_group") ;
        $gender_id            = $this->input->post("gender_id") ;



        $data['org_id']             = $this->input->post("org_id") ;
        $data['fields_id']          = $this->input->post("fields_id") ;
        $data['users_id']           = $this->input->post("users_id") ;
        $data['blood_group']        = $this->input->post("blood_group") ;
        $data['gender_id']          = $this->input->post("gender_id") ;

        $data['allPdt'] = $this->main_model->UsersList($org_id,$fields_id,$users_id,$blood_group,$gender_id);

        $agent_id =  $this->session->userdata('loggedin_userid');
        $data['allOrg'] = $this->common_model->view_data("organizations", array("agent_id"=>$agent_id), "id", "DESC");
        $data['allOrgfields'] = $this->common_model->view_data("org_fields", array("agent_id"=>$agent_id), "id", "DESC");
        $data['allStu'] = $this->common_model->view_data("users_fields", array("agent_id"=>$agent_id), "id", "DESC");
        $data['content'] = $this->load->view("admin/users-list", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


    public function create(){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users Create";
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['content'] = $this->load->view("admin/users/users-create", $data, TRUE);
        $this->load->view('layout/master', $data);
	}

    public function fetch_accounts() {
        $paymentTypeId = $this->input->post('payment_type_id');
        $data['allClass'] = $this->main_model->CustomerClasses("classes",$paymentTypeId);
        $data['allSect'] = $this->main_model->CustomerClasses("sections",$paymentTypeIdd);
        $data['allSession'] = $this->main_model->CustomerClasses("sessions",$paymentTypeId);
         $accounts =   $this->main_model->AgentCustomFields($paymentTypeId);
         $data['allPdt'] = $accounts;
        // Prepare the response
        if ($accounts) {
            $response = [
                'success' => true,
                'html' => $this->load->view('admin/users/users-data', $data, true) // Load a view to create HTML
            ];
        } else {
            $response = [
                'success' => false,
                'html' => ''
            ];
        }

        // Return JSON response
        echo json_encode($response);
    }



    public function insert(){

        $agent_id = $this->session->userdata('loggedin_userid');
        $code_random = $this->main_model->number_generator("users_fields",$agent_id);

        $y= date('y');
        $m=date('m');

        $code = $y.$m.$agent_id.str_pad($code_random,3,"0",STR_PAD_LEFT);
      
        $data = array(  
            "ip_address"                        => $_SERVER['REMOTE_ADDR'],
            "date_code"                         => date('y'),
            "month_code"                        => date('m'),
            "code_random"                       => $code_random,
            "registration_no"                   => $code, 
            "agent_id"                          => $agent_id,
            "organization_id"                   => $this->common_model->xss_clean($this->input->post("organization_id")),
            "org_fields_id"                     => $this->common_model->xss_clean($this->input->post("org_form_id")),
            "name_en"                           => $this->common_model->xss_clean($this->input->post("name_en")),
            "name_bn"                           => $this->common_model->xss_clean($this->input->post("name_bn")),
            "father_name_en"                    => $this->common_model->xss_clean($this->input->post("father_name_en")),
            "father_name_bn"                    => $this->common_model->xss_clean($this->input->post("father_name_bn")),
            "mother_name_en"                    => $this->common_model->xss_clean($this->input->post("mother_name_en")),
            "mother_name_bn"                    => $this->common_model->xss_clean($this->input->post("mother_name_bn")),
            "mobile_no"                         => $this->common_model->xss_clean($this->input->post("mobile_no")),
            "email"                             => $this->common_model->xss_clean($this->input->post("email")),
            "village_en"                        => $this->common_model->xss_clean($this->input->post("village_en")),
            "village_bn"                        => $this->common_model->xss_clean($this->input->post("village_bn")),
            "post_office_en"                    => $this->common_model->xss_clean($this->input->post("post_office_en")),
            "post_office_bn"                    => $this->common_model->xss_clean($this->input->post("post_office_bn")),
            "upazila_en"                        => $this->common_model->xss_clean($this->input->post("upazila_en")),
            "upazila_bn"                        => $this->common_model->xss_clean($this->input->post("upazila_bn")),
            "zilla_en"                          => $this->common_model->xss_clean($this->input->post("zilla_en")),
            "zilla_bn"                          => $this->common_model->xss_clean($this->input->post("zilla_bn")),
            "designation"                       => $this->common_model->xss_clean($this->input->post("designation")),
            "department"                        => $this->common_model->xss_clean($this->input->post("department")),
            "employee_id"                       => $this->common_model->xss_clean($this->input->post("employee_id")),
            "index_no"                          => $this->common_model->xss_clean($this->input->post("index_no")),
            "class"                             => $this->common_model->xss_clean($this->input->post("class")),
            "class_roll"                        => $this->common_model->xss_clean($this->input->post("class_roll")),
            "sessions"                          => $this->common_model->xss_clean($this->input->post("sessions")),
            "sections"                          => $this->common_model->xss_clean($this->input->post("sections")),
            "date_of_birth"                     => $this->common_model->xss_clean($this->input->post("date_of_birth")),
            "gender"                            => $this->common_model->xss_clean($this->input->post("gender")),
            "id_number"                         => $this->common_model->xss_clean($this->input->post("id_number")),
            "blood_group"                       => $this->common_model->xss_clean($this->input->post("blood_group")),
            "marital_status"                    => $this->common_model->xss_clean($this->input->post("marital_status")),
            "nationality"                       => $this->common_model->xss_clean($this->input->post("nationality")),
            "present_address_en"                => $this->common_model->xss_clean($this->input->post("present_address_en")),
            "present_address_bn"                => $this->common_model->xss_clean($this->input->post("present_address_bn")),
            "permanent_address_en"              => $this->common_model->xss_clean($this->input->post("permanent_address_en")),
            "permanent_address_bn"              => $this->common_model->xss_clean($this->input->post("permanent_address_bn")),
            "is_active"                         => 1,
            "create_date"                       => strtotime($date),
           
        );


        if ($_FILES['pic']['name'] != "") {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
            $config['upload_path'] = "./public/static/images/users/";
            $config['encrypt_name'] = TRUE;
            $config['file_name'] = uniqid(); 
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("pic")) {
                $data['photo'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }else{
            $data['photo'] = "0.png";
        }


        if ($_FILES['signature']['name'] != "") {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
            $config['upload_path'] = "./public/static/images/users/";
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("signature")) {
                $data['signature'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }
    
      if ($this->common_model->save_data("users_fields", $data)) {
        $id=$this->common_model->Id;
      
        $this->session->set_flashdata('success', 'Save Successfully');
        }else{
            $this->session->set_flashdata('error', 'Server error.');
        }
        redirect(base_url() . "admin/users/create", "refresh");

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
        $org_id = $_GET['v'];
        $data['allClass'] = $this->main_model->CustomerClasses("classes",$org_id);
        $data['allSect'] = $this->main_model->CustomerClasses("sections",$org_id);
        $data['allSession'] = $this->main_model->CustomerClasses("sessions",$org_id);
        $data['allPdt'] =   $this->main_model->AgentCustomFields($org_id);
        $data['allStu'] = $this->main_model->UsersList($id);

      //  echo "<pre>";print_r($data['allStu']);exit();
        $data['content'] = $this->load->view("admin/users/users-edit", $data, TRUE);
        $this->load->view('layout/master', $data);
	}
    public function update(){
        $id = $this->input->post("id");
        $selPdt=$this->common_model->view_data("users_fields",array("id"=>$id),"id","desc");
      
     
    
        $data = array(
        
            "name_en"                           => $this->common_model->xss_clean($this->input->post("name_en")),
            "name_bn"                           => $this->common_model->xss_clean($this->input->post("name_bn")),
            "father_name_en"                    => $this->common_model->xss_clean($this->input->post("father_name_en")),
            "father_name_bn"                    => $this->common_model->xss_clean($this->input->post("father_name_bn")),
            "father_mobile_no"                  => $this->common_model->xss_clean($this->input->post("father_mobile_no")),
            "mother_name_en"                    => $this->common_model->xss_clean($this->input->post("mother_name_en")),
            "mother_name_bn"                    => $this->common_model->xss_clean($this->input->post("mother_name_bn")),
            "mother_mobile_no"                  => $this->common_model->xss_clean($this->input->post("mother_mobile_no")),
            "mobile_no"                         => $this->common_model->xss_clean($this->input->post("mobile_no")),
            "email"                             => $this->common_model->xss_clean($this->input->post("email")),
            "village_en"                        => $this->common_model->xss_clean($this->input->post("village_en")),
            "village_bn"                        => $this->common_model->xss_clean($this->input->post("village_bn")),
            "post_office_en"                    => $this->common_model->xss_clean($this->input->post("post_office_en")),
            "post_office_bn"                    => $this->common_model->xss_clean($this->input->post("post_office_bn")),
            "upazila_en"                        => $this->common_model->xss_clean($this->input->post("upazila_en")),
            "upazila_bn"                        => $this->common_model->xss_clean($this->input->post("upazila_bn")),
            "zilla_en"                          => $this->common_model->xss_clean($this->input->post("zilla_en")),
            "zilla_bn"                          => $this->common_model->xss_clean($this->input->post("zilla_bn")),
            "designation"                       => $this->common_model->xss_clean($this->input->post("designation")),
            "department"                        => $this->common_model->xss_clean($this->input->post("department")),
            "employee_id"                       => $this->common_model->xss_clean($this->input->post("employee_id")),
            "index_no"                          => $this->common_model->xss_clean($this->input->post("index_no")),
            "class"                             => $this->common_model->xss_clean($this->input->post("class")),
            "class_roll"                        => $this->common_model->xss_clean($this->input->post("class_roll")),
            "sessions"                          => $this->common_model->xss_clean($this->input->post("sessions")),
            "sections"                          => $this->common_model->xss_clean($this->input->post("sections")),
            "date_of_birth"                     => $this->common_model->xss_clean($this->input->post("date_of_birth")),
            "gender"                            => $this->common_model->xss_clean($this->input->post("gender")),
            "id_number"                         => $this->common_model->xss_clean($this->input->post("id_number")),
            "blood_group"                       => $this->common_model->xss_clean($this->input->post("blood_group")),
            "marital_status"                    => $this->common_model->xss_clean($this->input->post("marital_status")),
            "nationality"                       => $this->common_model->xss_clean($this->input->post("nationality")),
            "present_address_en"                => $this->common_model->xss_clean($this->input->post("present_address_en")),
            "present_address_bn"                => $this->common_model->xss_clean($this->input->post("present_address_bn")),
            "permanent_address_en"              => $this->common_model->xss_clean($this->input->post("permanent_address_en")),
            "permanent_address_bn"              => $this->common_model->xss_clean($this->input->post("permanent_address_bn")),
                        
            );
            if ($_FILES['pic']['name'] != "") {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
                $config['upload_path'] = "./public/static/images/users/";
                $config['encrypt_name'] = TRUE;
                $config['file_name'] = uniqid(); 
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload("pic")) {
                    $data['photo'] = $this->upload->data('file_name');
                    //$arrayMsg['enc_name'] = "1";
                }
            }
    
    
            if ($_FILES['signature']['name'] != "") {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
                $config['upload_path'] = "./public/static/images/users/";
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload("signature")) {
                    $data['signature'] = $this->upload->data('file_name');
                    //$arrayMsg['enc_name'] = "1";
                }
            }
         
            if ($this->common_model->update_data("users_fields", $data,array("id"=>$id))) {
            
                $this->session->set_flashdata('success', 'Update Successfully');
            }
            else{
                $this->session->set_flashdata('error', 'Something error.');
            }
            $this->session->set_userdata($sdata);
           redirect(base_url() . "admin/organization/formlist", "refresh");
    }


    public function reports(){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users Reports";
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");

      //  echo "<pre>";print_r($data['allStu']);exit(); 
        $data['content'] = $this->load->view("admin/users/users-reports-new", $data, TRUE);
        $this->load->view('layout/master', $data);
	}

    public function reportspdf(){
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Users Reports";
        $org            = $this->input->post("organization_id");
        $org_form_id    = $this->input->post("org_form_id");
        $data['allCat'] = $this->main_model->AgentOrgName($org);
        $data['allFields'] = $this->main_model->AgentOrgFiledsList($org_form_id);
        $data['allPdt'] = $this->main_model->AgentOrgUsersList($org_form_id);
        $data['css'] = [
            base_url('public/reports/assets/css/main.css'),
            base_url('public/reports/assets/css/bootstrap.min.css')
        ];
        //echo "<pre>";print_r($data['allPdt']);exit(); 
       
        $this->load->view('admin/users/users-reports-pdf', $data);
	}

  

}