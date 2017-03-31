<?php 
	// if (! defined('BASEPATH')) exit('No direct script access allowed'); 

	// 	class Login_model extends CI_Model
	// 	{
			
	// 		function __construct()
	// 		{
	// 			parent::__construct();
	// 		}

	// 		public function validate()
	// 		{
	// 			$username   =  $this->security->xss_clean($this->input->post('user_name'));
	// 			$passsword  =  $this->security->xss_clean($this->input->post('password'));
	// 			$email      =  $this->security->xss_clean($this->input->post('email'));
	// 			// $passsword  =  $this->security->xss_clean($this->input->post('passsword'));


	// 				$this->db->where('username'   ,$username);
	// 		        $this->db->where('username'   ,$username);

	// 		        $query =  $this->db->get('users');

	// 			if ($query->num_rows() == 1) 
	// 			{
	// 			      $rows  = $query->rows();
	// 			      $data  = array(
	// 			      			'id'          =>   $rows->id,
	// 			      			'user_name'   =>   $rows->username,
	// 			      			'user_email'  =>   $rows->email,
	// 			      			'password'    =>   $rows->password,
	// 			      			'status'      =>   'active',
	// 			      	);

	// 			      	$this->session->set_userdata($data);
	// 			      	return true;	

	// 			}

	// 			 return false;

	// 		}

			
	// }


 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('user_email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('users');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('users');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('users', $data);
	}
}


?>