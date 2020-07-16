<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('psw');
    }

    public function change_password()
    {
        $user = $this->session->userdata('username');
        $c_psw = $this->input->post('cur_psw');
        $n_psw = $this->input->post('new_psw');
        $cred = array(
            'email' => $user,
            'psw' => $c_psw
        );
        $n_cred = array(
            'email' => $user,
            'password' => $n_psw
        );
        $a = $this->psw->check($cred);  
        if(!empty($a))
        {
            $this->psw->update_psw($n_cred);
        }
        else{
            echo "<script>alert('Wrong Credentials');history.go(-1);</script>";
        }
        $this->load->view('teachers/profile2');
    }

    public function index()
    {
        $un = $this->session->userdata('username');
        $data["fetch_data"] = $this->psw->teacher_profile($un);
        $this->load->view('teachers/profile3',$data);
    }
    
}
