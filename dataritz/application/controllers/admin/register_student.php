<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_student extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/register_studentm');
    }
    public function index(){
        $this->load->view('admin/register_student');
    }
    public function register(){
        $name   = $this->input->post('name');
        $mobilenumber = $this->input->post('mobile_number');
        $rollnumber=$this->input->post('roll_number');
        $admissionnumber=$this->input->post('admission_number');
        $mothersname=$this->input->post('mothers_name');
        $fathersname=$this->input->post('fathers_name');
        $dob=$this->input->post('dob');
        $course=$this->input->post('course');
        $branch=$this->input->post('branch');
        $semester=$this->input->post('semester');
        $gender=$this->input->post('gender');
        $year=$this->input->post('year');
		$email  = $this->input->post('email');
		$password = $this->input->post('password');
	    $role   = "student";
		$data   = array(
			'name'   => $name,
			'mobile_number' => $mobilenumber,
			'email'  => $email,
            'roll_number'  => $rollnumber,
            'admission_number'  => $admissionnumber,
            'mothers_name'  => $mothersname,
            'fathers_name'  => $fathersname,
            'dob'  => $dob,
            'course'  => $course,
            'branch'  => $branch,
            'semester'  => $semester,
            'gender'  => $gender,
            'year'  => $year,
		);
		$credential = array(
			'username' => $email,
			'password' => $password,
			'role'     => $role
        );
        $a = $this->register_studentm->check_email($data['email']);
		if(!empty($a))
		{
			$this->load->view('admin/register_student');
		}
		else
		{
			$this->register_studentm->register($data,$credential);
		}
	}
}
    