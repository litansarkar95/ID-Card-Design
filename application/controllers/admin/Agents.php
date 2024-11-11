<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $myid = $this->session->userdata("loggedin");
      
        if($myid ==null){
            redirect(base_url() . "authentication", "refresh");
        }
          
     
    }

    public function index()
	{
        $data = array();
        $data['active'] = "agents";
        $data['title'] =  "Agents List";
        $data['allPdt'] = $this->main_model->AgentList();
        $data['content'] = $this->load->view("admin/agents/list", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

    public function edit($id)
	{
        $data = array();
        $data['active'] = "agents";
        $data['title'] =  "Agents Edit";
        $data['allRole'] = $this->common_model->Role();
        $data['allPdt'] = $this->main_model->AgentList($id);
        //print_r( $data['allPdt'] );exit();
        $data['content'] = $this->load->view("admin/agents/edit", $data, TRUE);
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
              "create_user"                => $this->session->userdata('loggedin_id'),
              "create_date"                => strtotime($date),
             
          );

            // Set configuration
       
         
        if ($_FILES['pic']['name'] != "") {

            $config['upload_path'] = './public/static/images/agents/"';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 81048; // 2MB
            $config['file_name'] = uniqid(); 
            $this->upload->initialize($config);
    
            // Check if file upload was successful
            if (!$this->upload->do_upload('pic')) {
                // If upload failed, display error
                
                $error = $this->upload->display_errors();
              
            } else {
                $data['picture'] = $this->upload->data('file_name');
          
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
        $dt = $this->common_model->view_data("agents", array("id" => $id), "id", "asc");
        foreach ($dt as $pdt){
            $old_ext=$pdt->picture;
        }
        if(file_exists("public/static/images/agents/{$old_ext}")){
            unlink("public/static/images/agents/{$old_ext}");
        }
        if ($dt) {
           
            $this->common_model->delete_data("agents", array("id" => $id));
        
            $this->session->set_flashdata('success', 'Delete Successfully');
        } else {
            $this->session->set_flashdata('error', 'Server error.');
        }
        $this->session->set_userdata($sdata);
        redirect(base_url() . "admin/agents", "refresh");
    }


    public function change(){
    
        $id=$this->input->post("aid");
        $selPdt=$this->common_model->view_data("login_credential",array("id"=>$id),"id","desc");
       
        $data = array(
            "password"         => $this->common_model->Encryptor('encrypt', $this->input->post('password')),
                        
            );
            if ($this->common_model->update_data("login_credential", $data,array("id"=>$id))) {
                $this->session->set_flashdata('success', 'Change Password Successfully');
            }
            else{
                $this->session->set_flashdata('error', 'Server error.');
            }
            $this->session->set_userdata($sdata);
            redirect(base_url() . "admin/agents", "refresh");
    }


    public function update(){
    
        $id = $this->input->post("id");
        $selPdt=$this->common_model->view_data("agents",array("id"=>$id),"id","desc");
      
        $data = array(
            "name"                       => $this->common_model->xss_clean($this->input->post("agent_name")),
            "name_bn"                    => $this->common_model->xss_clean($this->input->post("agent_name_bn")),
            "mobile_no"                  => $this->common_model->xss_clean($this->input->post("mobile_no")),
            "email"                      => $this->common_model->xss_clean($this->input->post("email")),
            "roles_id"                   => $this->common_model->xss_clean($this->input->post("role")),
            "address"                    => $this->common_model->xss_clean($this->input->post("address")),
            "is_active"                  => $this->common_model->xss_clean($this->input->post("status")),
                        
            );
            if ($_FILES['pic']['name'] != "") {
                $config['upload_path'] = './public/static/images/agents/"';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 81048; // 2MB
                $config['file_name'] = uniqid(); 
                $this->upload->initialize($config);    
                if ($this->upload->do_upload("pic")) {
                    $data['picture'] = $this->upload->data('file_name');
                    //$arrayMsg['enc_name'] = "1";
                }
            }

          
         
            if ($this->common_model->update_data("agents", $data,array("id"=>$id))) {
               $lid =  $this->common_model->xss_clean($this->input->post("lid"));
                $sdata =array (
                    "username"                   => $this->common_model->xss_clean($this->input->post("email")),
                    "role"                       => $this->common_model->xss_clean($this->input->post("role")),
                    "active"                     => $this->common_model->xss_clean($this->input->post("status")),
                  );
               
                  $this->common_model->update_data("login_credential", $sdata,array("id"=>$lid));

                $this->session->set_flashdata('success', 'Delete Successfully');
            }
            else{
                $this->session->set_flashdata('error', 'Something error.');
            }
            $this->session->set_userdata($sdata);
           redirect(base_url() . "admin/agents", "refresh");
    }


    public function login($id)
	{

        $password    = $this->security->xss_clean($this->input->post("password"));
    

        $login_credential = $this->authentication_model->admin_credential($id);
      
    
        if ($login_credential) {
                if ($login_credential->active) {
                    if ($login_credential->role == 2) {
                        $userType = 'admin';
                    } elseif($login_credential->role == 3) {
                        $userType = 'agent';
                    } elseif($login_credential->role == 4) {
                    $userType = 'customer';
                } elseif($login_credential->role == 5) {
                    $userType = 'user';
                }else {
                        $userType = 'superdamin';
                    }
              $getUser = $this->authentication_model->getUserNameByRoleID($login_credential->role, $login_credential->user_id);
                   // get logger name
                   $sessionData = array(
                    'name' => $getUser['name'],
                    'logger_photo' => $getUser['picture'],
                    'loggedin_id' => $login_credential->id,
                    'loggedin_userid' => $login_credential->user_id,
                    'loggedin_role_id' => $login_credential->role,
                    'loggedin_type' => $userType,
                    'loggedin' => true,
                );
                $this->session->set_userdata($sessionData);
                $this->db->update('login_credential', array('last_login' => date('Y-m-d H:i:s')), array('id' => $login_credential->id));
                if ($this->session->has_userdata('redirect_url')) {
                    redirect($this->session->userdata('redirect_url'));
                } else {
                    redirect(base_url('dashboard'));
                }
            }
            }
                
    }

  
}