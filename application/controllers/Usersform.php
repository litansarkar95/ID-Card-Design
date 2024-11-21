<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersform extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email');
     
    }
	public function index($id)
	{

       
		$data = array();
      
        $data['active'] = "dashboard";
        $data['title'] =  "User Form";
        $data['allCat'] = $this->main_model->AgentOrgList($id);
        $data['allClass'] = $this->main_model->CustomerClasses("classes",$id);
        $data['allSect'] = $this->main_model->CustomerClasses("sections",$id);
        $data['allSession'] = $this->main_model->CustomerClasses("sessions",$id);
        $data['allPdt'] = $this->main_model->CustomfieldsInputData($id);
    
      // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('front/user-form', $data);
	}


    public function userformsubmit(){

   
    
            $agent_id = $this->common_model->xss_clean($this->input->post("agent_id"));
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
                "agent_id"                          => $this->common_model->xss_clean($this->input->post("agent_id")),
                "organization_id"                   => $this->common_model->xss_clean($this->input->post("organization_id")),
                "org_fields_id"                     => $this->common_model->xss_clean($this->input->post("id")),
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
                "date_of_birth"                     => strtotime($this->common_model->xss_clean($this->input->post("date_of_birth"))),
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
            }else{
                //$data['signature'] = "0.png";
            }
        
          if ($this->common_model->save_data("users_fields", $data)) {
            $id=$this->common_model->Id;
          
            $this->session->set_flashdata('success', 'Save Successfully');
            }else{
                $this->session->set_flashdata('error', 'Server error.');
            }
            redirect(base_url() . "thanks", "refresh");

    }
    public function thanks(){
        $data = array();
        $id = $_GET['v'];
        $data['active'] = "thanks";
        $data['title'] =  "Thanks";
       
      // $data['content'] = $this->load->view("admin/dashboard", $data, TRUE);
       $this->load->view('front/thanks', $data);
    }


    public function send_email() {
        // Set email configuration
        // $this->load->config('email'); // Load email config
        // $this->email->initialize($this->config->item('email'));
        $config = array(
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.yourmail.com',
            'smtp_port'   => 587,
            'smtp_user'   => 'your_email@example.com',
            'smtp_pass'   => 'your_email_password',
            'smtp_crypto' => 'tls',
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'wordwrap'    => TRUE
        );

        // Initialize email with the config
        $this->email->initialize($config);

        $data = array(
            'name' => 'John Doe',
            'verification_link' => base_url('verify/email') // Example verification link
        );
        // Prepare the email body using a view file
        $message = $this->load->view('front/email_template', $data, TRUE);

        // Setup email parameters
        $this->email->from('your_email@example.com', 'Your Service');
        $this->email->to('recipient@example.com'); // Recipient's email
        $this->email->subject('Welcome to Our Service');
        $this->email->message($message); // Set the email message content

        // Send the email
        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Failed to send email.';
            
            echo $this->email->print_debugger(); // For debugging purposes
        }
      
    }


}