<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
        if($myid ==null){
            redirect(base_url() . "authentication", "refresh");
        }
          
     
    }



    public function design($id=null){

       
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Card Design";
        $data['allTemp'] = $this->common_model->view_data("card_design", array("is_active" => 1), "id", "ASC");
        $data['allCat'] = $this->main_model->OrgFieldsAgent();
        $data['content'] = $this->load->view("admin/custom/card-design", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


    public function fetch_accounts() {
        $paymentTypeId = $this->input->post('payment_type_id');

         $accounts = $this->main_model->get_org_fields($paymentTypeId);
         $data['allPdt'] = $accounts;
        if ($accounts) {
            $response = [
                'success' => true,
                'html' => $this->load->view('admin/custom/card-design-data', $data, true) 
            ];
        } else {
            $response = [
                'success' => false,
                'html' => ''
            ];
        }

        echo json_encode($response);
    }


    public function printdesign(){
        $data = array();
        $data['active'] = "users";
        $design_id = $_GET['v'];
        $data['title'] =  "Users List";
        //
        $id                = $this->input->post('fields_code');
        $template_id       = $this->input->post('template_id');
        $side_id           = $this->input->post('side_id');
        $qr_tpye           = $this->input->post('qr_tpye');
        $qr_system         = $this->input->post('qr_system');
        $staff_or_student  = $this->input->post('staff_or_student');
        $is_valid          = $this->input->post('is_valid');
        $valid_date        = $this->input->post('valid_date');

      $fields = [
      'name_en' => 'Full Name',
      'name_bn' => 'নাম',
      'father_name_en' => "Father's Name",
      'father_name_bn' => 'পিতার নাম',
      'father_mobile_no' => "Father's Mobile No",
      'mother_name_en' => 'Mother Name',
      'mother_name_bn' => 'মায়ের নাম',
      'mother_mobile_no' => "Mother Mobile No",
      'mobile_no' => 'Mobile No.',
      'email' => 'Email',
      'village_en' => 'Village',
      'village_bn' => 'গ্রাম',
      'post_office_en' => 'Post Office',
      'post_office_bn' => 'পোস্ট অফিস',
      'upazila_en' => 'Upazila',
      'upazila_bn' => 'উপজেলা',
      'zilla_en' => 'Zilla',
      'zilla_bn' => 'জেলা',
      'designation' => 'Designation',
      'department' => 'Department',
      'employee_id' => 'Employee ID',
      'index_no' => 'Index No',
      'class_roll' => 'Class Roll',
      'date_of_birth' => 'Date of Birth',
      'id_number' => 'ID No',
      'nationality' => 'Nationality',
      'photo' => 'Photo',
];

// $data = [];
// foreach ($fields as $field => $label) {
//     $data[$field] = $this->input->post($field);
// }

// if (in_array(1, $data)) {

// }

    $data['allPdt'] = $this->main_model->PrintUserData($id);
     
//echo "<pre>";print_r($data['allPdt']);

         // #############################################
         ############################# CODE ##################
         ####################################################

      // Template mapping
        $templates = [
            1 => 'admin/card/001/card-design-001',
            2 => 'admin/card/002/card-design-002',
            3 => 'admin/card/003/card-design-003',
            4 => 'admin/card/004/card-design-004', 
        ];

        // যদি valid template_id থাকে
        if (isset($templates[$template_id])) {
             // side mapping
          $sides = [
              'front_side' => 'front-side',
              'back_side'  => 'back-side',
              'both_side'  => 'both-side',
          ];

            $this->load->view("admin/design/" . str_pad($template_id, 3, "0", STR_PAD_LEFT) . "/" . $sides[$side_id], $data);
          //  $this->load->view($templates[$template_id], $data);
        } else {
            echo "Invalid Template ID!";
        }

     
      
  
    }

    
}