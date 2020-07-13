<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_portal extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('students/student_att');
	}

	public function daily_att()
	{
		$this->load->view('students/daily_att');
	}

	public function weekly_att(){
		$this->load->view('students/weekly_att');
	}

	public function total_att(){
		$this->load->view('students/total_att');
	}
}