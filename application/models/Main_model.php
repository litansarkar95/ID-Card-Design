<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


    public function CustomfieldsList($id=NULL) {
        if($id){
            $this->db->where("org_fields.id",$id); 
        }
        $agent_id  = $this->session->userdata('loggedin_userid');
		$this->db->select("org_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("org_fields");
        $this->db->join('organizations', "org_fields.organization_id = organizations.id",'left');
        $this->db->where('organizations.agent_id', $agent_id);
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

    public function CustomfieldsInputData($id) {
     
        $agent_id  = $this->session->userdata('loggedin_userid');
		$this->db->select("org_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("org_fields");
        $this->db->join('organizations', "org_fields.organization_id = organizations.id",'left');
        $this->db->where("org_fields.id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function OrgFieldsAgent(){
        $agent_id  = $this->session->userdata('loggedin_userid');
        $this->db->select("org_fields.*");
        $this->db->from("org_fields");;
        $this->db->where("org_fields.is_active",1); 
        $this->db->where('org_fields.agent_id', $agent_id);
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function AgentCustomFields($id) {
      

		$this->db->select("org_fields.*");
        $this->db->from("org_fields");;
        $this->db->where("org_fields.id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

    public function CustomerClasses2($id) {
       
		$this->db->select("org_fields.* ,classes.name classes , classes.id cid");
        $this->db->from("org_fields");
        $this->db->join('organizations', "org_fields.organization_id = organizations.id",'left');
        $this->db->join('classes', "classes.organization_id = organizations.id",'left');
        $this->db->where("org_fields.id",$id); 
        $this->db->where("classes.is_active",1); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

    public function CustomerClasses($table,$id) {
     
		$this->db->select("$table.* ");
        $this->db->from($table);
        $this->db->join('organizations', "$table.organization_id = organizations.id",'left');
        $this->db->join('org_fields', "org_fields.organization_id = organizations.id",'left');
        $this->db->where("org_fields.id",$id); 
        $this->db->where("$table.is_active",1); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function UsersList($id=NULL) {
        $agent_id  = $this->session->userdata('loggedin_userid');

        if($id){
            $this->db->where("users_fields.id",$id); 
        }
		$this->db->select("users_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->where('organizations.agent_id', $agent_id);
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }  

    
    public function CardDesignList($id=NULL) {
       

        if($id){
            $this->db->where("card_design.id",$id); 
        }
		$this->db->select("card_design.*");
        $this->db->from("card_design");
        $this->db->where('card_design.is_active', 1);
        $this->db->order_by("id", "ASC");
        return $this->db->get()->result();
    } 
    public function AgentOrgList($id=NULL) {
        $agent_id  = $this->session->userdata('loggedin_userid');
        if($id){
            $this->db->where("organizations.id",$id); 
        }
		$this->db->select("organizations.* ");
        $this->db->from("organizations");
        $this->db->where("organizations.is_active",1); 
        $this->db->where('organizations.agent_id', $agent_id);
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

   public function AgentOrgName($id) {
        $agent_id  = $this->session->userdata('loggedin_userid');
     
            
      
		$this->db->select("organizations.* ");
        $this->db->from("organizations");
        $this->db->where("organizations.is_active",1); 
        $this->db->where("organizations.id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }


      public function AgentOrgUsersList($id) {
 
     
            
		$this->db->select("users_fields.* ,classes.name class_name ,sections.name sections_name , sessions.name sessions_name , org_fields.title");
        $this->db->from("users_fields");
        $this->db->join('classes', "users_fields.class = classes.id", 'left');
        $this->db->join('sections', "users_fields.sections = sections.id", 'left');
        $this->db->join('sessions', "users_fields.sessions = sessions.id", 'left');
        $this->db->join('org_fields', "users_fields.org_fields_id = org_fields.id", 'left');
        $this->db->where("users_fields.org_fields_id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

      public function AgentOrgFiledsList($id) {
 
     
            
		$this->db->select("org_fields.* ");
        $this->db->from("org_fields");
        $this->db->where("org_fields.id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    
    public function FieldsListUsers($org_fields_id, $id=NULL) {
        $agent_id  = $this->session->userdata('loggedin_userid');
        if($id){
            $this->db->where("users_fields.id",$id); 
        }
		$this->db->select("users_fields.* ");
        $this->db->from("users_fields");
        //$this->db->where("users_fields.is_active",1); 
        $this->db->where('users_fields.org_fields_id', $org_fields_id);
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function org_fieldsListUsers($id=NULL) {
        // Fetch logged-in user's ID
        $agent_id  = $this->session->userdata('loggedin_userid');
        if($id){
            $this->db->where("org_fields.id", $id);
        }
       $this->db->select("org_fields.* , organizations.name org_name, organizations.mobile_no org_mobile_no , 
            (select count(org_fields_id) from users_fields where org_fields_id = org_fields.id) total");
        $this->db->from("org_fields");
        $this->db->where("org_fields.is_active", 1);
        $this->db->where("org_fields.agent_id", $agent_id);
        $this->db->join('organizations', "org_fields.organization_id = organizations.id", 'left');
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    

    public function AgentOrgClassesList($table,$id=NULL) {
        $agent_id  = $this->session->userdata('loggedin_userid');
        if($id){
            $this->db->where("$table.id",$id); 
        }
		$this->db->select("$table.* , organizations.name org_name,  organizations.mobile_no org_mobile_no");
        $this->db->from($table);
        $this->db->where("$table.is_delete",0); 
        $this->db->where("$table.agent_id", $agent_id);
        $this->db->join('organizations', "$table.organization_id = organizations.id",'left');
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function AgentList($id=NULL) {
        if($id){
            $this->db->where("agents.id",$id); 
        }
		$this->db->select("agents.* , login_credential.id lid");
        $this->db->from("agents");
        $this->db->where("login_credential.role",3); 
        $this->db->join('login_credential', "agents.id = login_credential.user_id",'left');
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }

    public function CustomerListDashboard() {
       
		$this->db->select("users_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
       
        $this->db->order_by("id", "DESC");
        $this->db->limit(10);
        return $this->db->get()->result();
    } 
    public function PrintUserData($id) {
       
		$this->db->select("users_fields.*,org_fields.terms_conditions_name , org_fields.terms_conditions   ,classes.name  class, sections.name sections, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.website , organizations.signature_name , organizations.signature_picture ,organizations.picture org_picture ,sessions.name sessions");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->join('org_fields', "users_fields.org_fields_id = org_fields.id",'left');
        $this->db->join('classes', "users_fields.class = classes.id",'left');
        $this->db->join('sections', "users_fields.sections = sections.id",'left');
        $this->db->join('sessions', "users_fields.sessions = sessions.id",'left');
        $this->db->where("users_fields.org_fields_id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    } 
    public function get_org_fields($id) {
       
		$this->db->select("org_fields.*");
        $this->db->from("org_fields");
        $this->db->where("org_fields.id",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    } 
         /*invoice no generator*/
         public function  SalesDateId($table) {
            $CurrentYear = date('Y');
    
            $this->db->select_max('date_code', 'date_code');
            $query      = $this->db->get($table);
            $result     = $query->result_array();
            $invoice_no = $result[0]['date_code'];
            if ($invoice_no == $CurrentYear) {
                
                $invoice_no=1  ;
            } else {
                $invoice_no = 0;
            }
            return $invoice_no;
        }
    
        public function  MonthDateId($table) {
    
            $CurrentMonth = date('m');
    
            $this->db->select_max('month_code', 'month_code');
            $query      = $this->db->get($table);
            $result     = $query->result_array();
     
            $invoice_no = $result[0]['month_code'];
           
            if ($invoice_no == $CurrentMonth) {
                
                $invoice_no=1  ;
            } else {
                $invoice_no = 0;
            }
            return $invoice_no;
        }
        public function  number_generator($table,$agent_id) {
            $ThisYear = date('Y');
            $ThisMonth = date('m');
    
           $CurrentYear = $this->SalesDateId($table);
             $CurrentMonth = $this->MonthDateId($table);
           
            $this->db->select_max('code_random', 'code_random');
            $this->db->where('date_code',$ThisYear);
            $this->db->where('month_code',$ThisMonth);
            $this->db->where('agent_id',$agent_id);
            $query      = $this->db->get($table);
            $result     = $query->result_array();
         
             $invoice_no = $result[0]['code_random'];
    
       if($CurrentYear OR $CurrentMonth){
       
    
        if ($invoice_no != '') {
                
            $invoice_no = $invoice_no + 1;
        } else {
            $invoice_no = 1;
        }
        return $invoice_no;
    }
    else{
    
           $invoice_no = 1;
    
        return $invoice_no;
    }
    
    
       }

       

       public function CardDesignID($id) {
        // Use query builder for safer queries
        $this->db->select('design_id');
        $this->db->from('design_fields');
        $this->db->where('org_fields_id', $id);
        
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            // Fetch the first row
            $row = $query->row_array();
            return $row['design_id'];
        }
        
        return 0; 
    }

    
      // Fetch classes by orgnation_id
      public function fetch_classes($category_id,$table ){
        $this->db->where('organization_id', $category_id);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function update_image_with_class($data, $organization_id, $org_fields_id, $class, $id_number, $sections = NULL) {
        // Set the basic conditions
        $this->db->where('users_fields.organization_id', $organization_id);
        $this->db->where('users_fields.org_fields_id', $org_fields_id);
        $this->db->where('users_fields.id_number', $id_number);
    
        // Handle the 'class' condition with 'sections' being optional
        if ($sections !== NULL) {
            // If $sections is not null, check for both 'class' and 'sections'
            $this->db->group_start()
                     ->where('users_fields.class', $class)
                     ->or_where('users_fields.class', $sections)
                     ->group_end();
        } else {
            // Only filter by 'class'
            $this->db->where('users_fields.class', $class);
        }
    
        // Perform the update
        $this->db->update('users_fields', $data);
    
        // Check if rows were updated
        if ($this->db->affected_rows() > 0) {
            return true;  // Successful update
        } else {
            return false;  // No rows updated
        }
    }

    public function update_image_with_class_roll($data, $organization_id, $org_fields_id, $class, $class_roll, $sections = NULL) {
        // Set the basic conditions
  
        $this->db->where('users_fields.organization_id', $organization_id);
        $this->db->where('users_fields.org_fields_id', $org_fields_id);
        $this->db->where('users_fields.class_roll', $class_roll);
    
        // Handle the 'class' condition with 'sections' being optional
        if ($sections !== NULL) {
            // If $sections is not null, check for both 'class' and 'sections'
            $this->db->group_start()
                     ->where('users_fields.class', $class)
                     ->or_where('users_fields.class', $sections)
                     ->group_end();
        } else {
            // Only filter by 'class'
            $this->db->where('users_fields.class', $class);
        }
    
        // Perform the update
        $this->db->update('users_fields', $data);
    
        // Check if rows were updated
        if ($this->db->affected_rows() > 0) {
            return true;  // Successful update
        } else {
            return false;  // No rows updated
        }
    }



    public function VerificationData($id) {
       
		$this->db->select("users_fields.*,classes.name  class, sections.name sections, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.website , organizations.signature_name , organizations.signature_picture ,organizations.picture org_picture");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->join('classes', "users_fields.class = classes.id",'left');
        $this->db->join('sections', "users_fields.sections = sections.id",'left');
        $this->db->where("users_fields.registration_no",$id); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    } 
    
    


}