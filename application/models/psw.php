<?php

Class Psw extends CI_Model {

    public function check($cred) 
    {     
        $this->db->select('*');
        $this->db->where('username', $cred["email"]);
        $this->db->where('password', $cred["psw"]);
        $query = $this->db->get("login");
        $data = $query->result_array();
        return $query;
    }

    public function update_psw($n_cred)
    {
        $query=$this->db->query("update login SET password='".$n_cred['password']."'where username='".$n_cred['email']."'");
    }

    public function hod_profile($un)
    {
        $this->db->select('*');
        $this->db->where('email', $un);
        $query = $this->db->get('hod_info');
        return $query;
    }

    public function teacher_profile($un)
    {
        $this->db->select('*');
        $this->db->where('email', $un);
        $query = $this->db->get('teacher_info');
        return $query;
    }
}