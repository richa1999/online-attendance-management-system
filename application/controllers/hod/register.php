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
	    $role   = "hod";
		$data   = array(
			'name'   => $name,
			'mobile' => $mobile,
			'email'  => $email,
		    'dept'   => $dept
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
			$this->load->view('hod/register');
		}
		else
		{
			$this->register_teacher->register($data,$credential);
		}
	}
}