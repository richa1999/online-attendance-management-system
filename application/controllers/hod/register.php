<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('hod/register_teacher');
    }
	public function index()
	{
		$this->load->view('hod/register');
	}

	public function register_teacher()
	{
		$name   = $this->input->post('name');
		$mobile = $this->input->post('mobile_no');
		$email  = $this->input->post('email');
		$password = $this->input->post('password');
		$dept   = $this->input->post('dept');
		$course = $this->input->post('course');
	    $role   = "hod";
		$data   = array(
			'name'   => $name,
			'mobile' => $mobile,
			'email'  => $email,
			'dept'   => $dept,
			'course' => $course
		);
		$credential = array(
			'name'  => $name,
			'username' => $email,
			'password' => $password,
			'role'     => $role
		);
		$a = $this->register_teacher->check_email($data['email']);
		if(!empty($a))
		{
			echo "<script>alert('Email id already registered!');history.go(-1);</script>";
		}
		else
		{
			$this->register_teacher->register($data,$credential);
			echo "<script>alert('Registered Successfully');history.go(-1);</script>";
			$this->load->view('admin/register');
		}
	}
}