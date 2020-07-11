<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registered_users extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('registered_user');
    }
    public function students()
    {
        $course = $this->input->post('course');
        $branch = $this->input->post('branch');
        $year = $this->input->post('year');
        $sem = $this->input->post('Sem');
        $data_1 = array(
            'course' => $course,
            'branch' => $branch,
            'year' => $year,
            'semester'=> $sem
        );
        $data["fetch_data"] = $this->registered_user->fetch_student($data_1);
        $this->load->view('hod/student_list',$data);
    }

    public function teachers()
    {
        $dept = $this->input->post('dept');
        $data["fetch_data"] = $this->registered_user->fetch_teacher($dept);
        $this->load->view('hod/teachers_list',$data);
    }
}