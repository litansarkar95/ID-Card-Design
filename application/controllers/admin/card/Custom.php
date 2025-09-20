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


  public function printdesign() {
    // QR লাইব্রেরি লোড (phpqrcode)
    require_once(APPPATH . 'libraries/phpqrcode/qrlib.php');

    $data = array();
    $data['active'] = "users";
    $design_id = $_GET['v'];
    $data['title'] =  "Users List";

    
    // Input data
    $id                = $this->input->post('fields_code');
    $template_id       = $this->input->post('template_id');
    $side_id           = $this->input->post('side_id');
    $qr_tpye           = $this->input->post('qr_tpye');
    $qr_system         = $this->input->post('qr_system');
    $staff_or_student  = $this->input->post('staff_or_student');
    $is_valid          = $this->input->post('is_valid');
    $valid_date        = $this->input->post('valid_date');

     $data['header_title'] = $this->input->post('header_title');

        $type = $this->input->post('type');
        $input_id = $this->input->post('input_id');
        $input_position = $this->input->post('input_position'); 
        $input1 = $this->input->post('input1'); 
        $input2 = $this->input->post('input2'); 

         if ($type == 'id') {
            $data['allPdt'] = $this->card_model->get_by_id($id,$input_id);
        } elseif ($type == 'position') {
            $data['allPdt'] = $this->card_model->get_by_position($id,$input_position);
        } elseif ($type == 'range') {
            $data['allPdt'] = $this->card_model->get_by_range($id,$input2, $input1); // limit, offset
        }


 $orderedFieldsRaw = $this->input->post('ordered_fields'); // CSV string
$orderedFields = explode(',', $orderedFieldsRaw); // Final ordered array

$data['fields'] = $orderedFields;
$data['valid_date'] = $valid_date;
//echo "<pre>";print_r($data['allPdt']);exit();

// Save Data
  $mdata = array(   
              "agent_id"                          => $this->session->userdata('loggedin_userid'),
              "org_fields_id"                     => $this->common_model->xss_clean($this->input->post("fields_code")),

  );

$this->common_model->save_data("users_last_design", $mdata);


//End Save Data
  


   
    // Input Fields 
    //  $data['name_en']                = $this->input->post('name_en');
    //  $data['name_bn']                = $this->input->post('name_bn');
    //  $data['class']                  = $this->input->post('class');
    //  $data['class_roll']             = $this->input->post('class_roll');
    //  $data['sections']               = $this->input->post('sections');
    //  $data['sessions']               = $this->input->post('sessions');
    //  $data['employee_id']            = $this->input->post('employee_id');
    //  $data['blood_group']            = $this->input->post('blood_group');
    //  $data['father_name_en']         = $this->input->post('father_name_en');
    //  $data['father_mobile_no']       = $this->input->post('father_mobile_no');
    //  $data['mother_name_en']         = $this->input->post('mother_name_en');
    //  $data['mobile_no']              = $this->input->post('mobile_no');
    //  $data['is_valid']               = $this->input->post('is_valid');
    //  $data['valid_date']             = $this->input->post('valid_date');
    //  $data['permanent_address_en']   = $this->input->post('permanent_address_en');
    //  $data['index_no']               = $this->input->post('index_no');
    //  $data['designation']            = $this->input->post('designation');
    //  $data['village_en']             = $this->input->post('village_en');
    //  $data['village_bn']             = $this->input->post('village_bn');
   



    // Fields mapping
    // $fields = [
    //     'name_en' => 'Full Name',
    //     'name_bn' => 'নাম',
    //     'father_name_en' => "Father's Name",
    //     'father_name_bn' => 'পিতার নাম',
    //     'father_mobile_no' => "Father's Mobile No",
    //     'mother_name_en' => 'Mother Name',
    //     'mother_name_bn' => 'মায়ের নাম',
    //     'mother_mobile_no' => "Mother Mobile No",
    //     'mobile_no' => 'Mobile No.',
    //     'email' => 'Email',
    //     'village_en' => 'Village',
    //     'village_bn' => 'গ্রাম',
    //     'post_office_en' => 'Post Office',
    //     'post_office_bn' => 'পোস্ট অফিস',
    //     'upazila_en' => 'Upazila',
    //     'upazila_bn' => 'উপজেলা',
    //     'zilla_en' => 'Zilla',
    //     'zilla_bn' => 'জেলা',
    //     'designation' => 'Designation',
    //     'department' => 'Department',
    //     'employee_id' => 'Employee ID',
    //     'index_no' => 'Index No',
    //     'class_roll' => 'Class Roll',
    //     'date_of_birth' => 'Date of Birth',
    //     'id_number' => 'ID No',
    //     'nationality' => 'Nationality',
    //     'photo' => 'Photo',
    // ];

    // User data
        // $data['allPdt'] = $this->main_model->PrintUserData($id);
        $qr_system = $this->input->post('qr_system');
       // echo "<pre>";  print_r($data['allPdt']);exit();
            // QR কোড ফাইল রাখার ফোল্ডার
            $qr_dir = FCPATH . 'qrcodes/';
            if (!is_dir($qr_dir)) {
                mkdir($qr_dir, 0777, true);
            }

            // প্রতিটি ইউজারের জন্য QR কোড তৈরি করুন
            foreach ($data['allPdt'] as $index => $user) {
                // ইউজার ইনফো
                $name = $user->name_en ?? 'unknown';
                $email = $user->email ?? 'noemail@example.com';
                $phone = $user->mobile_no ?? '0000000000';
                $gender = $user->gender ?? 'N/A';
                $address = $user->village_en ?? 'N/A';
                $blood_group = $user->blood_group ?? 'N/A';
                $registration_no = $user->registration_no ?? '0000';

                // QR ডাটা তৈরি
                if ($qr_system == 'online') {
                    $qr_data = base_url() . "verification/" . urlencode(strtolower(str_replace(' ', '_', $name))) . "?v=" . $registration_no;
                } else {
                    $qr_data = "$name\nEmail: $email\nMobile No: $phone\nAddress: $address\nGender: $gender\nBlood Group: $blood_group\n";
                }

                // ফাইল নাম (ইউনিক করার জন্য index/ID যোগ করুন)
                $clean_name = strtolower(str_replace(' ', '_', $name));
                $qr_filename = $clean_name . '_' . $index . '_qr.png';
                $qr_filepath = $qr_dir . $qr_filename;

                // Generate QR কোড
                QRcode::png($qr_data, $qr_filepath, QR_ECLEVEL_H, 5);

                // ভিউতে path পাঠানোর জন্য অ্যারে তৈরি
                $data['allPdt'][$index]->qr_code_url = base_url('qrcodes/' . $qr_filename);

            }

    // ==============================
    // ✅ QR Code Generate Logic End
    // ==============================

    // Template mapping
    $templates = [
        1 => 'admin/card/001/card-design-001',
        2 => 'admin/card/002/card-design-002',
        3 => 'admin/card/003/card-design-003',
        4 => 'admin/card/004/card-design-004',
        5 => 'admin/card/005/card-design-005',
        6 => 'admin/card/006/card-design-006',
        7 => 'admin/card/007/card-design-007',
        8 => 'admin/card/007/card-design-008',
    ];

    if (isset($templates[$template_id])) {
        $sides = [
            'front_side' => 'front-side',
            'back_side'  => 'back-side',
            'both_side'  => 'both-side',
        ];

        // View load with QR
        $this->load->view("admin/design/" . str_pad($template_id, 3, "0", STR_PAD_LEFT) . "/" . $sides[$side_id], $data);
    } else {
        echo "Invalid Template ID!";
    }
}


    

    
}