<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Include PhpSpreadsheet files
require_once APPPATH . 'third_party/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Excel_import_multipicture extends CI_Controller {

    public function __construct() {
        parent::__construct();
    
    }

 

    public function index($id = Null){
        $data = array();
        $data['active'] = "export";
        $data['title'] =  "export List";
        $data['id']    = $id;
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/export/excel_import_multipicture", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

       // Fetch subcategories by category_id via AJAX
       public function fetch_classes() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"classes");
        echo json_encode($subcategories);
    }

    public function fetch_sections() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"sections");
        echo json_encode($subcategories);
    }

    public function fetch_session() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"sessions");
        echo json_encode($subcategories);
    }
    //org form
    public function fetch_org_form() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"org_fields");
        echo json_encode($subcategories);
    }
    public function multiple_upload() {
        $check_name = $this->common_model->xss_clean($this->input->post("check_name"));
        $organization_id = $this->common_model->xss_clean($this->input->post("eorganization_name"));
        $org_fields_id   = $this->common_model->xss_clean($this->input->post("org_name_form_id"));
        $class = $this->common_model->xss_clean($this->input->post("class_id"));
        $sections = $this->common_model->xss_clean($this->input->post("section_id"));
     
       
  
  
          $config['upload_path'] = './public/static/images/users/'; // Set your upload path
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = 12048; // Set max size in KB
      
          $this->load->library('upload', $config);
      
          $images = $_FILES['images']; // Assume input field name is `images`
          $image_names = [];
      
          foreach ($images['name'] as $key => $image) {
              $_FILES['image[]']['name'] = $images['name'][$key];
              $_FILES['image[]']['type'] = $images['type'][$key];
              $_FILES['image[]']['tmp_name'] = $images['tmp_name'][$key];
              $_FILES['image[]']['error'] = $images['error'][$key];
              $_FILES['image[]']['size'] = $images['size'][$key];
      
              // Reinitialize upload library for each file
              $this->upload->initialize($config);
      
              if ($this->upload->do_upload('image[]')) {
                  $fileData = $this->upload->data();
                  $file_name_no_ext = pathinfo( $_FILES['image[]']['name'], PATHINFO_FILENAME);
                  $data['photo'] = $fileData['file_name'];
                  $image_names[] = $file_name_no_ext;
              } else {
                  // Handle upload error for this file
                  $error = $this->upload->display_errors();
                  echo "Error uploading file {$images['name'][$key]}: $error";
              }
      
          if($check_name == 'mobile_no'){
                  $filesave =  $this->common_model->update_data("users_fields", $data,array("mobile_no"=> $file_name_no_ext));
              }else if($check_name == 'registration_no'){
                  $filesave =  $this->common_model->update_data("users_fields", $data,array("registration_no"=> $file_name_no_ext));
              }
  
              else if($check_name == 'id'){
                  $filesave =  $this->common_model->update_data("users_fields", $data,array("id"=> $file_name_no_ext));
              }

              else if($check_name == 'studnet_id'){
                $filesave =   $this->main_model->update_image_with_class($data,$organization_id,$org_fields_id,$class,$file_name_no_ext,$sections);

            }
            else if($check_name == 'class_roll'){
             
                $filesave =   $this->main_model->update_image_with_class_roll($data,$organization_id,$org_fields_id,$class,$file_name_no_ext,$sections);

            }
                        
          }
          if($filesave){
  
              $this->session->set_flashdata('success', 'Import  Successfully');
              redirect(base_url() . "admin/users", "refresh");
          }
          else{
              $this->session->set_flashdata('error', 'Something error.');
          }
          $this->session->set_userdata($sdata);

        redirect(base_url() . "admin/export/excel_import_multipicture", "refresh");
      
          // $image_names now contains names of all successfully uploaded files without extensions
        //  print_r($image_names);
      }

}
