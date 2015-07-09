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
}
?>