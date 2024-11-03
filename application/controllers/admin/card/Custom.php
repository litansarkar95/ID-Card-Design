<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }



    public function design($id=null){

       
        $data = array();
        $data['active'] = "users";
        $data['title'] =  "Card Design";
        $data['allTemp'] = $this->common_model->view_data("card_design", array("is_active" => 1), "id", "ASC");
        $data['allCat'] = $this->common_model->view_data("org_fields", array("is_active" => 1), "id", "DESC");
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
            $this->load->view('admin/custom/design-choose-dynamic', $data);
        }else if ($template_id == 2){
            $this->load->view('admin/card/card-design-001', $data);
        }
 
       
  
    }

    public function savedate(){
        echo $this->input->post('name_ok');
        echo $this->input->post('name_cchek');
    }


}