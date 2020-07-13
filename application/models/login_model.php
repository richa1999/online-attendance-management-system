<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function check_user($username, $password)
	{
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login');
        return $query;
    }
}