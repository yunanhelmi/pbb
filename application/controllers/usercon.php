<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class UserCon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	function login()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('homecon', 'refresh');
		}
		else
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('login_form');
		}
	}
	
	function veriflogin()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('homecon', 'refresh');
		}
		else
		{
			$this->form_validation->set_rules('username','Username','strip_tags|required|xss_clean');
			$this->form_validation->set_rules('password','Password','strip_tags|required|xss_clean|callback_check');
			
			if($this->form_validation->run() == FALSE)
			{
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$data['status'] = $session_data['status'];
				$this->load->view('menu', $data);
				$this->load->view('login_form');
			}
			else
			{
				redirect('homecon/pbb', 'refresh');
			}
		}
	}
	
	function check()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$result = $this->usermodel->login($username, $password);
			
		if($result)
		{
			$session_array = array();
			foreach($result as $row)
			{
				$session_array = array(
				'username'=>$row->username,
				'status'=>$row->status
				);
				$this->session->set_userdata('logged_in', $session_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check', 'Invalid username or password');
			return false;
		}
	}
	
	function register()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('homecon', 'refresh');
		}
		else
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('register_form');
		}
	}
	
	function do_register()
	{
		$this->form_validation->set_rules('username','Username','strip_tags|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','strip_tags|required|xss_clean');
		$this->form_validation->set_rules('passwordcon','Password Confirmation','strip_tags|required|xss_clean|callback_checkreg');
		
		if($this->form_validation->run() == FALSE)
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('register_form');
		}
		else
		{
			if($this->input->post('register'))
			{
				if($this->usermodel->add_user())
				{
					//echo 'Hi '.$this->input->post('username').' Registred successfully';
					redirect('usercon/login', 'refresh');
				}
				else
				{
					//echo 'Registration failed';
					redirect('usercon/register', 'refresh');
				}
			}
		}
	}
	
	function checkreg()
	{
		$password = $this->input->post('password');
		$passwordcon = $this->input->post('passwordcon');
		
		if($password == $passwordcon)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('checkreg', 'Password tidak sama');
			return FALSE;
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('homecon', 'refresh');
	}
}
?>