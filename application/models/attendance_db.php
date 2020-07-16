<?php

Class Attendance_db extends CI_Model {

    public function store($data)
    {
        $this->db->insert('attendance', $data);
    }
}