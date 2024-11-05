<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


    public function CustomfieldsList($id=NULL) {
        if($id){
            $this->db->where("org_fields.id",$id); 
        }
		$this->db->select("org_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("org_fields");
        $this->db->join('organizations', "org_fields.organization_id = organizations.id",'left');
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    }
    public function UsersList($id=NULL) {
        if($id){
            $this->db->where("users_fields.id",$id); 
        }
		$this->db->select("users_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
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
       
		$this->db->select("users_fields.*, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.picture org_picture");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
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
        public function  number_generator($table,$organization_id) {
            $ThisYear = date('Y');
            $ThisMonth = date('m');
    
           $CurrentYear = $this->SalesDateId($table);
             $CurrentMonth = $this->MonthDateId($table);
           
            $this->db->select_max('code_random', 'code_random');
            $this->db->where('date_code',$ThisYear);
            $this->db->where('month_code',$ThisMonth);
            $this->db->where('organization_id',$organization_id);
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
    

}