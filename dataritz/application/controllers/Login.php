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
            $name  = $data['name'];
            $sesdata  = array(
                'username' => $username,
                'name' => $name,
                'role'    => $role,
                'logged_in'=> TRUE                
            );
            $this->session->set_userdata($sesdata);
            
            if($role === 'admin')
            {
                redirect('admin/register');
            }
            else if($role === 'teacher')
            {
              redirect('teachers/teacher_portal');
            }
            else if($role === 'student'){

                redirect('students/student_portal');
            }
            else if($role === 'hod')
            {
              redirect('hod/register');
            }
            else
            {
                echo "<script>alert('access denied');history.go(-1);</script>";
            }
        }
    }

   function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}