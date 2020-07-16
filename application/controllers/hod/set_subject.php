<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_subject extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('subject_model');
    }
	
	public function set_subject(){
	    $un = $this->session->userdata('username');
        $data["fetch_data"] = $this->subject_model->course_branch($un);
		$this->load->view('hod/subjects',$data);
	}

	public function store_subject()
	{
		$un = $this->session->userdata('username');
        $data = $this->subject_model->course_branch($un);
		$year =  $this->input->post('sub1');
		$sem = $this->input->post('sub1');
		$sub1 = $this->input->post('sub1');
		$code1 = $this->input->post('code1');
		$t1 = $this->input->post('t1');
		$sub2 = $this->input->post('sub2');
		$code2 = $this->input->post('code2');
		$t2 = $this->input->post('t2');
		$sub3 = $this->input->post('sub3');
		$code3 = $this->input->post('code3');
		$t3 = $this->input->post('t3');
		$sub4 = $this->input->post('sub4');
		$code4 = $this->input->post('code4');
		$t4 = $this->input->post('t4');
		$sub5 = $this->input->post('sub5');
		$code5 = $this->input->post('code5');
		$t5 = $this->input->post('t5');
		$sub6 = $this->input->post('sub6');
		$code6 = $this->input->post('code6');
		$t6 = $this->input->post('t6');

		foreach($data->result() as $row)
		{
			$branch =  $row->dept;
			$course = $row->course;
		}
		$data = [
			'year' => $year,
			'semester' => $sem,
			'branch' => $branch,
			'course' => $course,
			'faculty_1' => $t1,
			'sub_code_1'=> $code1,
			'sub_name_1'=>$sub1,
			'faculty_2' => $t2,
			'sub_code_2'=> $code2,
			'sub_name_2'=>$sub2,
			'faculty_3' => $t3,
			'sub_code_3'=> $code3,
			'sub_name_3'=>$sub3,
			'faculty_4' => $t4,
			'sub_code_4'=> $code4,
			'sub_name_4'=>$sub4,
			'faculty_5' => $t5,
			'sub_code_5'=> $code5,
			'sub_name_5'=>$sub5,
			'faculty_6' => $t6,
			'sub_code_6'=> $code6,
			'sub_name_6'=>$sub6,

		] ;
		$a = $this->subject_model->check_subject($data['branch']);
		if(!empty($a))
		{
			echo "<script>alert('Subjects Already Set');history.go(-1);</script>";
		}
		else
		{
			$this->subject_model->store($data);
			echo "<script>alert('Subject Added Successfully');history.go(-1);</script>";
			$this->load->view('hod/subjects');
		}


	}

}