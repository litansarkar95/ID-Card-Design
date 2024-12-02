<?php
class Importexport_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_data($id) {
        $this->db->select("org_fields.*");
        $this->db->from("org_fields");
        $this->db->where("org_fields.id",$id); 
        $query = $this->db->get();
        return $query->result_array();
        
        
    }


    public function export_without_date($id) {
        $this->db->select("org_fields.*");
        $this->db->from("org_fields");
        $this->db->where("org_fields.id",$id); 
        $query = $this->db->get();
        return $query->result_array();          
    }

    public function export_Userfields_date($id) {
        $this->db->select("users_fields.*");
        $this->db->from("users_fields");
        $this->db->where("users_fields.org_fields_id",$id); 
        return $this->db->get()->result();         
    }
    public function get_data3() {
        return $query->result_array();
    }

    public function insert_batch($data) {
        $this->db->insert_batch('users_fields', $data);  
    }
}
