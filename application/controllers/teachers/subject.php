<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('subject_model');
    }
	public function fetch_subject()
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
        $data["fetch_data"] = $this->subject_model->fetch_subject($data_1);
		$this->load->view('teachers/subject',$data);
	}
}