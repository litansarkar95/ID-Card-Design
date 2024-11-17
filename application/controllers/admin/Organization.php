<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
        if($myid ==null){
            redirect(base_url() . "authentication", "refresh");
        }
          
     
    }
	public function index()
	{

      
        $this->form_validation->set_rules("company_name", "Company Name", "required");
        $this->form_validation->set_rules("company_name_bn", "Company Name Bnagla", "required");
        $this->form_validation->set_rules("mobile_no", "Mobile Number", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
          $company_name = $this->common_model->xss_clean($this->input->post("company_name"));
          $slug = $this->generate_slug($company_name);
         
          $data = array(   
              "agent_id"                   => $this->session->userdata('loggedin_userid'),
              "name"                       => $this->common_model->xss_clean($this->input->post("company_name")),
              "name_bn"                    => $this->common_model->xss_clean($this->input->post("company_name_bn")),
              "slug"                       => $slug,
              "mobile_no"                  => $this->common_model->xss_clean($this->input->post("mobile_no")),
              "email"                      => $this->common_model->xss_clean($this->input->post("email")),
              "website"                    => $this->common_model->xss_clean($this->input->post("website")),
              "address"                    => $this->common_model->xss_clean($this->input->post("address")),
              "signature_name"             => $this->common_model->xss_clean($this->input->post("signature_name")),
              "is_active"                  => 1,
              "create_user"                => $this->session->userdata('loggedin_id'),
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
        if ($_FILES['signature_picture']['name'] != "") {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
            $config['upload_path'] = "./public/static/images/organization/";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("signature_picture")) {
                $data['signature_picture'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }else{
            $data['signature_picture'] = "signature.png";
        }
      
        if ($this->common_model->save_data("organizations", $data)) {
          $id=$this->common_model->Id;

          $sdata =array (
            "user_id"                    => $id,
            "username"                   => $this->common_model->xss_clean($this->input->post("email")),
            "password"                   => $this->common_model->Encryptor('encrypt', $this->input->post('password')),
            "role"                       => 4,
            "active"                     => 1,
          );
          $this->common_model->save_data("login_credential", $sdata);
        
          $this->session->set_flashdata('success', 'Save Successfully');
          }else{
              $this->session->set_flashdata('error', 'Server error.');
          }
          redirect(base_url() . "admin/organization", "refresh");
        }


		$data = array();
        $data['active'] = "company";
        $data['title'] =  "Company";
        $agent_id =  $this->session->userdata('loggedin_userid');
        $data['allPdt'] = $this->common_model->view_data("organizations", array("agent_id"=>$agent_id), "id", "DESC");
        $data['content'] = $this->load->view("admin/org/company-list", $data, TRUE);
        $this->load->view('layout/master', $data);
	}


    public function update(){
    $id = $this->input->post("id");
    $selPdt=$this->common_model->view_data("organizations",array("id"=>$id),"id","desc");
  
    $data = array(
    
              "name"                       => $this->common_model->xss_clean($this->input->post("ecompany_name")),
              "name_bn"                    => $this->common_model->xss_clean($this->input->post("ecompany_name_bn")),
              "mobile_no"                  => $this->common_model->xss_clean($this->input->post("emobile_no")),
              "email"                      => $this->common_model->xss_clean($this->input->post("eemail")),
              "website"                    => $this->common_model->xss_clean($this->input->post("ewebsite")),
              "address"                    => $this->common_model->xss_clean($this->input->post("eaddress")),
              "signature_name"             => $this->common_model->xss_clean($this->input->post("esignature_name")),
              "is_active"                  => $this->common_model->xss_clean($this->input->post("status")),
                    
        );
        if ($_FILES['epic']['name'] != "") {
            $config['upload_path'] = './public/static/images/organization/"';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 81048; // 2MB
            $config['file_name'] = uniqid(); 
            $this->upload->initialize($config);    
            if ($this->upload->do_upload("epic")) {
                $data['picture'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }
        if ($_FILES['esignature_picture']['name'] != "") {
            $config['upload_path'] = './public/static/images/organization/"';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 81048; // 2MB
            $config['file_name'] = uniqid(); 
            $this->upload->initialize($config);    
            if ($this->upload->do_upload("esignature_picture")) {
                $data['signature_picture'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }
      
     
        if ($this->common_model->update_data("organizations", $data,array("id"=>$id))) {
        
            $this->session->set_flashdata('success', 'Update Successfully');
        }
        else{
            $this->session->set_flashdata('error', 'Something error.');
        }
        $this->session->set_userdata($sdata);
       redirect(base_url() . "admin/organization", "refresh");
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



    public function delete($id) {
        $dt = $this->common_model->view_data("organizations", array("id" => $id), "id", "asc");
        foreach ($dt as $pdt){
            $old_ext=$pdt->picture;
        }
        if(file_exists("public/static/images/organization/{$old_ext}")){
            unlink("public/static/images/organization/{$old_ext}");
        }
        if ($dt) {
           
            $this->common_model->delete_data("organizations", array("id" => $id));
        
            $this->session->set_flashdata('success', 'Delete Successfully');
        } else {
            $this->session->set_flashdata('error', 'Server error.');
        }
        $this->session->set_userdata($sdata);
        redirect(base_url() . "admin/organization", "refresh");
    }


}