<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class HomeCon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$data['tahun'] = $this->usermodel->drop_tahun()->result();
		$this->load->view('menu', $data);
		$this->load->view('homeview');
		//$this->load->view('homeview', $data);
	}
	
	function pbb()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('pbbview');
	}
	
	function inputpbb()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('inputpbb');
		}
		else
		{
			redirect('homecon', 'refresh');
		}
	}
	
	function doinputpbb()
	{
		if($this->input->post('inputpbb'))
		{
			echo 'Input Successfull';
			redirect('hommecon/pbb', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('hommecon/inputpbb', 'refresh');
		}
	}
	
	function nonpbb()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('nonpbbview');
	}
	
	function inputnonpbb()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('inputnonpbb');
		}
		else
		{
			redirect('homecon', 'refresh');
		}
	}
	
	function doinputnonpbb()
	{
		if($this->input->post('inputnonpbb'))
		{
			echo 'Input Successfull';
			redirect('hommecon/nonpbb', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('hommecon/inputnonpbb', 'refresh');
		}
	}
	
	function lain()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('lainview');
	}
	
	function inputlain()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['status'] = $session_data['status'];
			$this->load->view('menu', $data);
			$this->load->view('inputlain');
		}
		else
		{
			redirect('homecon', 'refresh');
		}
	}
	
	function doinputlain()
	{
		if($this->input->post('inputlain'))
		{
			echo 'Input Successfull';
			redirect('hommecon/lain', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('hommecon/inputlain', 'refresh');
		}
	}
	
	function tahun_dropdwon()
	{
		$drop_tahun = $this->usermodel->drop_tahun()->result();
		$result = array();
 	
		foreach ($drop_tahun as $key) {
			$hasi[0] = $key->tahun_sum;
			array_push($result, $hasi);
		}
	}
}
?>