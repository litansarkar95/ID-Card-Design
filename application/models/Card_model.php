<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model {

        public function get_by_id($id,$input1) {
		$this->db->select("users_fields.*,org_fields.terms_conditions_name , org_fields.terms_conditions   ,classes.name  class, sections.name sections, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.website , organizations.signature_name , organizations.signature_picture ,organizations.picture org_picture ,sessions.name sessions");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->join('org_fields', "users_fields.org_fields_id = org_fields.id",'left');
        $this->db->join('classes', "users_fields.class = classes.id",'left');
        $this->db->join('sections', "users_fields.sections = sections.id",'left');
        $this->db->join('sessions', "users_fields.sessions = sessions.id",'left');
        $this->db->where("users_fields.org_fields_id",$id); 
        $this->db->where("users_fields.registration_no",$input1); 
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result();
    } 

    public function get_by_position($id,$position) {
       
		$this->db->select("users_fields.*,org_fields.terms_conditions_name , org_fields.terms_conditions   ,classes.name  class, sections.name sections, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.website , organizations.signature_name , organizations.signature_picture ,organizations.picture org_picture ,sessions.name sessions");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->join('org_fields', "users_fields.org_fields_id = org_fields.id",'left');
        $this->db->join('classes', "users_fields.class = classes.id",'left');
        $this->db->join('sections', "users_fields.sections = sections.id",'left');
        $this->db->join('sessions', "users_fields.sessions = sessions.id",'left');
        $this->db->where("users_fields.org_fields_id",$id); 
        $this->db->limit(1, $position);
        $this->db->order_by("id", "ASC");
        return $this->db->get()->result();
    } 

     public function get_by_range($id,$limit, $offset) {
       
		$this->db->select("users_fields.*,org_fields.terms_conditions_name , org_fields.terms_conditions   ,classes.name  class, sections.name sections, organizations.name org_name,  organizations.slug org_slug  , organizations.mobile_no org_mobile_no , organizations.email org_email,  organizations.address org_address, organizations.website , organizations.signature_name , organizations.signature_picture ,organizations.picture org_picture ,sessions.name sessions");
        $this->db->from("users_fields");
        $this->db->join('organizations', "users_fields.organization_id = organizations.id",'left');
        $this->db->join('org_fields', "users_fields.org_fields_id = org_fields.id",'left');
        $this->db->join('classes', "users_fields.class = classes.id",'left');
        $this->db->join('sections', "users_fields.sections = sections.id",'left');
        $this->db->join('sessions', "users_fields.sessions = sessions.id",'left');
        $this->db->where("users_fields.org_fields_id",$id); 
        $this->db->limit($limit, $offset);
        $this->db->order_by("id", "ASC");
        return $this->db->get()->result();
    } 

}