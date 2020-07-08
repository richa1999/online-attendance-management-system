<?php

Class Register_studentm extends CI_Model {

    public function register($data, $credential) 
    {
        
        $this->db->insert('student_info', $data);
        $this->db->insert('login', $credential);

    }

    function check_email($email)
	{
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('student_info');
        $data = $query->result_array();
        return $data;
    }
}