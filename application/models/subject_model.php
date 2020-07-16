<?php

Class Subject_model extends CI_Model {

    function course_branch($un)
	{
        $this->db->select('*');
        $this->db->where('email', $un);
        $query = $this->db->get('hod_info');
        return $query;
    }

    function store($data)
    {
         $this->db->insert('subject', $data);
    }

    function check_subject($branch){
        $this->db->select('*');
        $this->db->where('branch', $branch);
        $query = $this->db->get('subject');
        $data = $query->result_array();
        return $data;
    }

    public function fetch_subject($data)
    {
        $this->db->select('*');
        $this->db->where('course', $data["course"]);
        $this->db->where('branch', $data["branch"]);
        $this->db->where('year', $data["year"]);
        $this->db->where('semester', $data["semester"]);
        $data = $this->db->get('subject');
        return $data;
    }
}