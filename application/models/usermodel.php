<?php
	class UserModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function login($username, $password)
		{
			$this->db->select("*");
			$this->db->from("user_login");
			$this->db->where("username = '".$username."'");
			$this->db->where("password = '".$password."'");
			$this->db->limit(1);
			
			$query = $this->db->get();
			
			if($query->num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function add_user()
		{
			$data=array(
			'username'=>$this->input->post('username'),
			'status'=>1,
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email')
			);
			
			$this->db->insert('user_login', $data);
			return true;
		}
	}
?>