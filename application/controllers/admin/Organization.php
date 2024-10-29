<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }
	public function index()
	{
        $this->form_validation->set_rules("company_name", "Company Name", "required");
        $this->form_validation->set_rules("mobile_no", "Mobile Number", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
          $company_name = $this->common_model->xss_clean($this->input->post("company_name"));
          $slug = $this->generate_slug($company_name);
         
          $data = array(   
      
              "name"                       => $this->common_model->xss_clean($this->input->post("company_name")),
              "slug"                       => $slug,
              "mobile_no"                  => $this->common_model->xss_clean($this->input->post("mobile_no")),
              "email"                      => $this->common_model->xss_clean($this->input->post("email")),
              "address"                    => $this->common_model->xss_clean($this->input->post("address")),
              "is_active"                  => 1,
              "create_user"                => $this->session->userdata('id'),
              "create_date"                => strtotime($date),
             
          );
         
        if ($_FILES['pic']['name'] != "") {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
            $config['upload_path'] = "./public/static/images/organization/";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("pic")) {
                $data['picture'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }else{
            $data['picture'] = "0.png";
        }
      
        if ($this->common_model->save_data("organizations", $data)) {
          $id=$this->common_model->Id;
        
          $this->session->set_flashdata('success', 'Save Successfully');
          }else{
              $this->session->set_flashdata('error', 'Server error.');
          }
          redirect(base_url() . "admin/organization", "refresh");
        }


		$data = array();
        $data['active'] = "company";
        $data['title'] =  "Company";
        $data['allPdt'] = $this->common_model->view_data("organizations", "", "id", "DESC");
        $data['content'] = $this->load->view("admin/company-list", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


    private function generate_slug($name) {
        // Convert to lowercase and replace spaces with hyphens
        $slug = strtolower(trim($name));
        $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug); // Replace non-alphanumeric characters with hyphens

        // Ensure slug is unique
        $base_slug = $slug;
        $i = 1;
        while ($this->slug_exists($slug)) {
            $slug = $base_slug . '-' . $i;
            $i++;
        }

        return $slug;
    }

    private function slug_exists($slug) {
        $this->db->where('slug', $slug);
        $query = $this->db->get('organizations');
        return $query->num_rows() > 0;
    }


}