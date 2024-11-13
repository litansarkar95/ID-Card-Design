<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $myid = $this->session->userdata("loggedin");
      
        if($myid ==null){
            redirect(base_url() . "authentication", "refresh");
        }
          
     
    }
	public function index()
	{
        
      
        $this->form_validation->set_rules("class_id", "Sections Name", "required");
        $this->form_validation->set_rules("organization_name", "Organization Name", "required");
        if ($this->form_validation->run() == NULL) {
      
        } else {
            
          $date = date("Y-m-d H:i:s");
         
          $data = array(   
              "agent_id"                   => $this->session->userdata('loggedin_userid'),
              "organization_id"            => $this->common_model->xss_clean($this->input->post("organization_name")),
              "name"                       => $this->common_model->xss_clean($this->input->post("class_id")),
              "is_active"                  => 1,
              "create_date"                => strtotime($date),
             
          );
         
     
      
        if ($this->common_model->save_data("sections", $data)) {
          $id=$this->common_model->Id;

   
        
          $this->session->set_flashdata('success', 'Save Successfully');
          }else{
              $this->session->set_flashdata('error', 'Server error.');
          }
          redirect(base_url() . "admin/base/sections", "refresh");
        }


		$data = array();
        $data['active'] = "Class";
        $data['title'] =  "class";
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['allPdt'] = $this->main_model->AgentOrgClassesList("sections");
        $data['content'] = $this->load->view("admin/base/sections", $data, TRUE);
        $this->load->view('layout/master', $data);
	}

    public function update(){
    
        $id = $this->input->post("id");
        $selPdt=$this->common_model->view_data("sections",array("id"=>$id),"id","desc");
      
        $data = array(
            "organization_id"            => $this->common_model->xss_clean($this->input->post("eorganization_name")),
            "name"                       => $this->common_model->xss_clean($this->input->post("eclass_id")),
            "is_active"                  => $this->common_model->xss_clean($this->input->post("is_active")),
                        
            );
        
          
         
            if ($this->common_model->update_data("sections", $data,array("id"=>$id))) {
             

                $this->session->set_flashdata('success', 'Delete Successfully');
            }
            else{
                $this->session->set_flashdata('error', 'Something error.');
            }
            $this->session->set_userdata($sdata);
           redirect(base_url() . "admin/base/sections", "refresh");
    }

    public function delete($id) {
    
        $dt = $this->common_model->view_data("sections", array("id" => $id), "id", "asc");
       
        if ($dt) {
           
            $this->common_model->delete_data("sections", array("id" => $id));
        
            $this->session->set_flashdata('success', 'Delete Successfully');
        } else {
            $this->session->set_flashdata('error', 'Server error.');
        }
        $this->session->set_userdata($sdata);
        redirect(base_url() . "admin/base/sections", "refresh");
    }


}