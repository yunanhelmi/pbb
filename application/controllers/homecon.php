<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeCon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		//$session_data = $this->session->userdata('logged_in');
		//$data['username'] = $session_data['username'];
		//$data['status'] = $session_data['status'];
		$this->load->view('menu');
		$this->load->view('login_form');
		//$this->load->view('homeview', $data);
	}
	
	function user()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('homeview');
		}
		else
		{
			redirect('homecon', 'refresh');
		}
	}
	
	function login()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('homecon', 'refresh');
		}
		else
		{
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
				$this->load->view('login_form');
			}
			else
			{
				redirect('homecon', 'refresh');
			}
		}
	}
	
	function check()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$result = $this->model->login($username, $password);
			
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
}
?>