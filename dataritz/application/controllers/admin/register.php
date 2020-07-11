<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/register_model');
    }
    public function index(){
        $this->load->view('admin/register');
    }
    public function register_student(){
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
            'name'    => $name,
			'username' => $email,
			'password' => $password,
			'role'     => $role
        );
        $a = $this->register_model->check_email_student($data['email']);
		if(!empty($a))
		{
            $this->load->view('admin/register');
            echo "<script>alert('Email id already registered!');history.go(-1);</script>";
		}
		else
		{
            $this->register_model->register_student($data,$credential);
            echo "<script>alert('Registered Successfully');history.go(-1);</script>";
            $this->load->view('admin/register');
		}
    }
    
    public function register_hod()
	{
		$name   = $this->input->post('name');
		$mobile = $this->input->post('mobile_no');
		$email  = $this->input->post('email');
		$password = $this->input->post('password');
		$dept   = $this->input->post('dept');
	    $role   = "hod";
		$data   = array(
			'name'   => $name,
			'mobile' => $mobile,
			'email'  => $email,
		    'dept'   => $dept
		);
		$credential = array(
            'name'   => $name,
			'username' => $email,
			'password' => $password,
			'role'     => $role
		);
		$a = $this->register_model->check_email_hod($data['email']);
		if(!empty($a))
		{
            $this->load->view('admin/register');
            echo "<script>alert('Email id already registered!');history.go(-1);</script>";
		}
		else
		{
            $this->register_model->register_hod($data,$credential);
            echo "<script>alert('Registered Successfully');history.go(-1);</script>";
            $this->load->view('admin/register');
		}
	}
}
    