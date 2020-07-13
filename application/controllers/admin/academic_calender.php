<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_calender extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
        $this->load->view('admin/academic_calender',array('error' => ' ' ));
    }

    public function do_upload()
    {
		
        $config['upload_path'] = './assets/academic_calender';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			echo "<script type='text/javascript'> alert('".json_encode($error)."') </script>";
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('admin/academic_calender', $data);
		}
	}
    
}