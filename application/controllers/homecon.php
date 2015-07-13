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
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('inputpbb');
		//print_r($session_data);
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
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('inputnonpbb');
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
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('inputlain');
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