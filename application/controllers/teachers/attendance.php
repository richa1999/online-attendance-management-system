<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('registered_user');
        $this->load->model('attendance_db');
    }
   
    var $tmp = array();
 
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
        $this->load->view('teachers/attendance',$data);
       
    }
    
    // public function c($data_1)
    // {
    //     foreach($data_1 as $data){
    //         array_push($this->tmp, $data);
    //     }
    // }

    // public static function save_att()
    // {
    //     // $this->students();
    //     // $data = $this->tmp;
    //     // foreach ($data as $row){
    //     //     $name = $this->input->get('name');
    //     //     $roll_no = $this->input->get('roll_no');
    //     //     $add_no = $this->input->get('add_no');
    //     //     $status = $this->input->post('status');
    //     //     $v = array(
    //     //     'name' => $name,
    //     //     'roll_no' => $roll_no,
    //     //     'admission_no' => $add_no,
    //     //     'status'=> $status,
    //     //     );
    //     //     $this->attendance_db->store($v);
    //     // }
    //     $date = $this->input->post('date');
    //     $lec_no = $this->input->post('lecture');
    //     $sub_name = $this->input->post('sub_name');
    //     $sub_code = $this->input->post('sub_code');
    //     $Fac_nam = $this->input->post('fac_name');
       
       
    //     $data_1 = array(
    //         'date'=> $date,
    //         'lecture_no'=> $lec_no,
    //         'sub_code'=> $sub_code,
    //         'sub_name'=> $sub_name,
    //         'faculty_name'=> $Fac_nam,
    //     );
        
    //     $this->attendance_db->store($data_1);
        
    // }
}