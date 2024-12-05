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
        // Prepare the response
        if ($accounts) {
            $response = [
                'success' => true,
                'html' => $this->load->view('admin/custom/card-design-data', $data, true) // Load a view to create HTML
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


    public function printdesign(){
        $data = array();
        $data['active'] = "users";
        $design_id = $_GET['v'];
        $data['title'] =  "Users List";
        $id = $this->input->post('fields_code');

        $data['allPdt'] = $this->main_model->PrintUserData($id);
    // echo "<pre>";   print_r($data['allPdt']);exit();
        $template_id = $this->input->post('template_id');
        if($template_id == 1){
            $this->carddesignfour($id);
         
        }else if ($template_id == 2){
            $this->carddesign_five($id);
  
        }else if ($template_id == 3){

            $allPdt = $this->main_model->PrintUserData($id);
        
            // Initialize an empty array to store user QR codes
            $qr_images = [];
    
            if ($allPdt) {
                // Loop through the user data (if multiple users)
                foreach ($allPdt as $pdt) {
                    // Extract user data
                    $name = $pdt->name_en;
                    $email = $pdt->email;
                    $phone = $pdt->mobile_no; // Make sure to use the correct field for phone number
                    $photo = $pdt->photo;
                    $registration_no = $pdt->registration_no;
                    $gender  = $pdt->gender;
                    $class = $pdt->class;
                    $sections = $pdt->sections;
                    $class_roll = $pdt->class_roll;
                    $org_name = $pdt->org_name;
                    $org_address  = $pdt->org_address;
                    $website = $pdt->website;
                    $org_mobile_no = $pdt->org_mobile_no;
                    $signature_name = $pdt->signature_name;
                    $signature_picture = $pdt->signature_picture;
                    $picture = $pdt->org_picture;

                    //input 
                    $qr_system = $this->input->post('qr_system');
                    if($qr_system == 'online'){
                        // Create the vCard data string
                      //  $datap = 
                      $datap = base_url() . "verification/".ReplaceR($name)."?v=".$registration_no;
                  //   $url = 'https://www.example.com';
                    }else if($qr_system == 'offline'){
                    // Create the vCard data string
                    $datap = "BEGIN:VCARD\nVERSION:3.0\nFN:$name\nTEL:$phone\nEMAIL:$email\nGender:$gender\nBlood Group:$blood_group\nEND:VCARD";
                    }
               
    
                    // Generate and save the QR code as an image in the 'qrcodes' folder
                    $qr_code_filename = 'qrcodes/' . strtolower(str_replace(' ', '_', $name)) . '_vcard.png';
                    $this->qr_code->generate($datap, $qr_code_filename);
    
                    // Add the generated QR code path to the array
                    $qr_images[] = [
                        'qr_code_image' => $qr_code_filename,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'photo' => $photo,
                        'gender' => $gender,
                        'class'  => $class,
                        'sections' => $sections,
                        'class_roll' => $class_roll,
                        'org_name' =>$org_name,
                        'org_mobile_no' => $org_mobile_no,
                        'org_address' => $org_address,
                        'website' => $website,
                        'signature_name' => $signature_name,
                        'signature_picture' => $signature_picture,
                        'picture' => $picture
                    ];
                }
            } else {
                // If no user data found, set the QR image to null or handle error
                $qr_images = null;
            }
    
            // Pass the data (including the QR code image) to the view
            $data['qr_images'] = $qr_images;
            $this->load->view('admin/card/card-design-003', $data);
        }else if ($template_id == 4){
            $this->load->view('admin/custom/design-choose-dynamic', $data);
     
        }
        else if ($template_id == 5){
            $this->load->view('admin/card/card-design-001', $data);
        }
 
       
  
    }

    public function savedate(){
        echo $this->input->post('name_ok');
        echo $this->input->post('name_cchek');
    }

       
    public function carddesignfour($id){
       
        $data['allPdt'] = $this->main_model->PrintUserData($id);
    //echo "<pre>";   print_r($data['allPdt']);exit();
        $template_id = $this->input->post('template_id');
    

            $allPdt = $this->main_model->PrintUserData($id);
        
            // Initialize an empty array to store user QR codes
            $qr_images = [];
    
            if ($allPdt) {
                // Loop through the user data (if multiple users)
                foreach ($allPdt as $pdt) {
                    // Extract user data
                    $name = $pdt->name_en;
                    $email = $pdt->email;
                    $phone = $pdt->mobile_no; // Make sure to use the correct field for phone number
                    $photo = $pdt->photo;
                    $registration_no = $pdt->registration_no;
                    $gender  = $pdt->gender;
                    $class = $pdt->class;
                    $sections = $pdt->sections;
                    $class_roll = $pdt->class_roll;
                    $org_name = $pdt->org_name;
                    $org_address  = $pdt->org_address;
                    $website = $pdt->website;
                    $org_mobile_no = $pdt->org_mobile_no;
                    $signature_name = $pdt->signature_name;
                    $signature_picture = $pdt->signature_picture;
                    $picture = $pdt->org_picture;

                    //input 
                    $qr_system = $this->input->post('qr_system');
                    if($qr_system == 'online'){
                        // Create the vCard data string
                      //  $datap = 
                      $datap = base_url() . "verification/".ReplaceR($name)."?v=".$registration_no;
                  //   $url = 'https://www.example.com';
                    }else if($qr_system == 'offline'){
                    // Create the vCard data string
                    $datap = "BEGIN:VCARD\nVERSION:3.0\nFN:$name\nTEL:$phone\nEMAIL:$email\nGender:$gender\nBlood Group:$blood_group\nEND:VCARD";
                    }
               
    
                    // Generate and save the QR code as an image in the 'qrcodes' folder
                    $qr_code_filename = 'qrcodes/' . strtolower(str_replace(' ', '_', $name)) . '_vcard.png';
                    $this->qr_code->generate($datap, $qr_code_filename);
    
                    // Add the generated QR code path to the array
                    $qr_images[] = [
                        'qr_code_image' => $qr_code_filename,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'photo' => $photo,
                        'gender' => $gender,
                        'class'  => $class,
                        'sections' => $sections,
                        'class_roll' => $class_roll,
                        'org_name' =>$org_name,
                        'org_mobile_no' => $org_mobile_no,
                        'org_address' => $org_address,
                        'website' => $website,
                        'signature_name' => $signature_name,
                        'signature_picture' => $signature_picture,
                        'picture' => $picture
                    ];
                }
            } else {
                // If no user data found, set the QR image to null or handle error
                $qr_images = null;
            }
    
            // Pass the data (including the QR code image) to the view
            $data['qr_images'] = $qr_images;
     
        $this->load->view('admin/card/card-design-004', $data);
    }
  public function carddesign_five($id){
    $data['allPdt'] = $this->main_model->PrintUserData($id);
    //echo "<pre>";   print_r($data['allPdt']);exit();
        $template_id = $this->input->post('template_id');
    

            $allPdt =  $data['allPdt'] ;
        
            // Initialize an empty array to store user QR codes
            $qr_images = [];
    
            if ($allPdt) {
                // Loop through the user data (if multiple users)
                foreach ($allPdt as $pdt) {
                    // Extract user data
                    $name = $pdt->name_en;
                    $email = $pdt->email;
                    $phone = $pdt->mobile_no; // Make sure to use the correct field for phone number
                    $photo = $pdt->photo;
                    $registration_no = $pdt->registration_no;
                    $gender  = $pdt->gender;
                    $class = $pdt->class;
                    $sections = $pdt->sections;
                    $class_roll = $pdt->class_roll;
                    $org_name = $pdt->org_name;
                    $org_address  = $pdt->org_address;
                    $website = $pdt->website;
                    $org_mobile_no = $pdt->org_mobile_no;
                    $signature_name = $pdt->signature_name;
                    $signature_picture = $pdt->signature_picture;
                    $picture = $pdt->org_picture;
                    $blood_group = $pdt->blood_group;
                    $id_number = $pdt->id_number;

                    //input 
                    $qr_system = $this->input->post('qr_system');
                    if($qr_system == 'online'){
                        // Create the vCard data string
                      //  $datap = 
                      $datap = base_url() . "verification/".ReplaceR($name)."?v=".$registration_no;
                  //   $url = 'https://www.example.com';
                    }else if($qr_system == 'offline'){
                    // Create the vCard data string
                  //  $datap = "BEGIN:VCARD\nVERSION:3.0\nFN:$name\nTEL:$phone\nEMAIL:$email\nEND:VCARD";
             
                  
                  $vcard  = "BEGIN:VCARD\n";
                  $datap .= "VERSION:3.0\n";
                  $vcard  .= "FN:$name\n";
                  $vcard  .= "TEL:$phone\n";
                  $vcard  .= "EMAIL:$email\n";
                  $vcard  .= "GENDER:$gender\n";
                  $vcard  .= "X-BLOOD-GROUP:$blood_group\n"; // Custom property for blood group
                  $vcard  .= "END:VCARD";
              
                     // Generate and save the QR code as an image in the 'qrcodes' folder
                     $qr_code_filename = 'qrcodes/' . strtolower(str_replace(' ', '_', $name)) . '_vcard.png';
                     $this->qr_code->generate($vcard , $qr_code_filename);
                    }
               
    
                 
    
                    // Add the generated QR code path to the array
                    $qr_images[] = [
                        'qr_code_image' => $qr_code_filename,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'photo' => $photo,
                        'gender' => $gender,
                        'class'  => $class,
                        'sections' => $sections,
                        'class_roll' => $class_roll,
                        'org_name' =>$org_name,
                        'org_mobile_no' => $org_mobile_no,
                        'org_address' => $org_address,
                        'id_number' => $id_number,
                        'blood_group' => $blood_group,
                        'website' => $website,
                        'signature_name' => $signature_name,
                        'signature_picture' => $signature_picture,
                        'picture' => $picture
                    ];
                }
            } else {
                // If no user data found, set the QR image to null or handle error
                $qr_images = null;
            }
    
            // Pass the data (including the QR code image) to the view
            $data['qr_images'] = $qr_images;
           $this->load->view('admin/card/card-design-005', $data);
  }

}