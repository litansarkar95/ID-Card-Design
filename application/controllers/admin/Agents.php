<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("authenticated");
      
         if($myid ==null){
             redirect(base_url() . "login", "refresh");
         }
          
     
    }

    public function index()
	{
        $data = array();
        $data['active'] = "agents";
        $data['title'] =  "Agents List";
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/agents/list", $data, TRUE);
        $this->load->view('layout/master', $data);
    }
	public function create()
	{
        $this->form_validation->set_rules("agent_name", "Agent Name", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("role", "Roles", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
          $agent_name = $this->common_model->xss_clean($this->input->post("agent_name"));
          $slug = $this->generate_slug($agent_name);
         
          $data = array(   
      
              "name"                       => $this->common_model->xss_clean($this->input->post("agent_name")),
              "name_bn"                    => $this->common_model->xss_clean($this->input->post("agent_name_bn")),
              "slug"                       => $slug,
              "mobile_no"                  => $this->common_model->xss_clean($this->input->post("mobile_no")),
              "email"                      => $this->common_model->xss_clean($this->input->post("email")),
              "roles_id"                   => $this->common_model->xss_clean($this->input->post("role")),
              "address"                    => $this->common_model->xss_clean($this->input->post("address")),
              "is_active"                  => 1,
              "create_user"                => $this->session->userdata('id'),
              "create_date"                => strtotime($date),
             
          );
         
        if ($_FILES['pic']['name'] != "") {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';  //supported image
            $config['upload_path'] = "./public/static/images/agents/";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("pic")) {
                $data['picture'] = $this->upload->data('file_name');
                //$arrayMsg['enc_name'] = "1";
            }
        }else{
            $data['picture'] = "0.png";
        }
      
        if ($this->common_model->save_data("agents", $data)) {
            $id = $this->common_model->Id;

            $sdata =array (
              "user_id"                    => $id,
              "username"                   => $this->common_model->xss_clean($this->input->post("email")),
              "password"                   => $this->common_model->Encryptor('encrypt', $this->input->post('password')),
              "role"                       => $this->common_model->xss_clean($this->input->post("role")),
              "active"                     => 1,
            );
            $this->common_model->save_data("login_credential", $sdata);
        
          $this->session->set_flashdata('success', 'Save Successfully');
          }else{
              $this->session->set_flashdata('error', 'Server error.');
          }
          redirect(base_url() . "admin/agents", "refresh");
        }


		$data = array();
        $data['active'] = "agents";
        $data['title'] =  "Agents";
        $data['allRole'] = $this->common_model->Role();
        $data['content'] = $this->load->view("admin/agents/agent", $data, TRUE);
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