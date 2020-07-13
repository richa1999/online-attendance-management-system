<?php

Class Register_model extends CI_Model {

    public function register_student($data, $credential) 
    {
        
        $this->db->insert('student_info', $data);
        $this->db->insert('login', $credential);

    }

    public function register_hod($data, $credential) 
    {
        
        $this->db->insert('hod_info', $data);
        $this->db->insert('login', $credential);

    }

    function check_email_student($email)
	{
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('student_info');
        $data = $query->result_array();
        return $data;
    }

    function check_email_hod($email)
	{
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('hod_info');
        $data = $query->result_array();
        return $data;
    }
}