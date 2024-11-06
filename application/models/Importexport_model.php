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
    public function get_data3() {
        return $query->result_array();
    }

    public function insert_batch($data) {
        $this->db->insert_batch('users_fields', $data);  // Replace 'users' with your actual table name
    }
}
