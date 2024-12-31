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

        $allPdt = $this->main_model->PrintUserData($id);
    
        $template_id = $this->input->post('template_id');
             


         // #############################################
         ############################# CODE ##################
         ####################################################

         $qr_images = [];

         if ($allPdt) {
            // Loop through the user data (if multiple users)
            foreach ($allPdt as $pdt) {
                // Extract user data
                $name                           = $pdt->name_en;
                $father_name_en                 = $pdt->father_name_en;
                $father_name_bn                 = $pdt->father_name_bn;
                $mother_name_en                 = $pdt->mother_name_en;
                $mother_name_bn                 = $pdt->mother_name_bn;
                $id_number                      = $pdt->id_number;
                $email                          = $pdt->email;
                $phone                          = $pdt->mobile_no; // Make sure to use the correct field for phone number
                $photo                          = $pdt->photo;
                $registration_no                = $pdt->registration_no;
                $gender                         = $pdt->gender;
                $class                          = $pdt->class;
                $sections                       = $pdt->sections;
                $class_roll                     = $pdt->class_roll;
                $org_name                       = $pdt->org_name;
                $org_email                       = $pdt->org_email;
                $org_address                    = $pdt->org_address;
                $website                        = $pdt->website;
                $org_mobile_no                  = $pdt->org_mobile_no;
                $signature_name                 = $pdt->signature_name;
                $signature_picture              = $pdt->signature_picture;
                $picture                        = $pdt->org_picture;
                $address                        = $pdt->present_address_en;

                //input 
                $qr_system = $this->input->post('qr_system');
                if($qr_system == 'online'){
                    // Create the vCard data string
                  //  $datap = 
                  $datap = base_url() . "verification/".ReplaceR($name)."?v=".$registration_no;
              //   $url = 'https://www.example.com';
                }else if($qr_system == 'offline'){
                // Create the vCard data string
                       
                $datap = "$name\nEmail: $email\nMobile No: $phone\nAddress: $address\nGender:$gender\nBlood Group:$blood_group\n";
               // $datap = "BEGIN:VCARD\nVERSION:3.0\nFN:$name\nTEL:$phone\nEMAIL:$email\nGender:$gender\nBlood Group:$blood_group\nEND:VCARD";
                }
           

                // Generate and save the QR code as an image in the 'qrcodes' folder
                $qr_code_filename = 'qrcodes/' . strtolower(str_replace(' ', '_', $name)) . '_vcard.png';
                $this->qr_code->generate($datap, $qr_code_filename);

                // Add the generated QR code path to the array
                $qr_images[] = [
                    'qr_code_image'             => $qr_code_filename,
                    'name'                      => $name,
                    'father_name_en'            => $father_name_en,
                    'father_name_bn'            => $father_name_bn,
                    'mother_name_en'            => $mother_name_en,
                    'mother_name_bn'            => $mother_name_bn,
                    'id_number'                 => $id_number,
                    'email' => $email,
                    'phone' => $phone,
                    'photo' => $photo,
                    'gender' => $gender,
                    'class'  => $class,
                    'sections' => $sections,
                    'class_roll' => $class_roll,
                    'org_name' =>$org_name,
                    'org_email' =>$org_email,
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


         ####################################################
         ################# END CODE ########################
         #####################################################
         if($template_id == 1){
            $this->load->view('admin/card/card-design-001', $data);
         
        }
         else if($template_id == 2){
            $this->load->view('admin/card/002/card-design', $data);
         
        }
        else if($template_id == 3){
            $this->load->view('admin/card/card-design-003', $data);
         
        }
        else if($template_id == 4){
            $this->load->view('admin/card/card-design-004', $data);
         
        }
        else if($template_id == 5){
           // $this->load->view('admin/card/card-design-005', $data);
          //  $this->load->view('admin/card/card-design-001', $data);

            $this->load->view('admin/card/005/back-side', $data);
        }
      
  
    }

    
}