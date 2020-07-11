<?php

Class Registered_user extends CI_Model {

    public function fetch_student($data_1) 
    {     
        $this->db->select('*');
        $this->db->where('course', $data_1["course"]);
        $this->db->where('branch', $data_1["branch"]);
        $this->db->where('year', $data_1["year"]);
        $this->db->where('semester', $data_1["semester"]);
        $query = $this->db->get("student_info");
        return $query;
    }

    public function fetch_teacher($dept)
    {
        $this->db->select('*');
        $this->db->where('dept', $dept);
        $query = $this->db->get("teacher_info");
        return $query;
    }

    public function fetch_hod()
    {
        $this->db->select('*');
        $query = $this->db->get("hod_info");
        return $query;
    }
}