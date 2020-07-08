<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }
	public function index()
	{
		$this->load->view('login_view');
    }

    function auth() 
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $result   = $this->Login_model->check_user($username, $password);
        if($result->num_rows() > 0)
        {
            $data     = $result->row_array();
            $username = $data['username'];
            $role    = $data['role'];
            $sesdata  = array(
                'username' => $username,
                'role'    => $role,
                'logged_in'=> TRUE                
            );
            $this->session->set_userdata($sesdata);
            if($role === 'admin')
            {
                redirect('hod/register');
            }
            elseif($role ==='student'){
                redirect('students/student');
            }
            else
            {
                echo "<script>alert('access denied');history.go(-1);</script>";
            }
            // $this->load->view('login_view');
        }
    }
}