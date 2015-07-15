<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class HomeCon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->model('datamodel');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		//$data['tahun'] = $this->usermodel->drop_tahun()->result();
		$this->load->view('menu', $data);
		$this->load->view('homeview');
		//$this->load->view('homeview', $data);
	}
	
	function keluarlinehome()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		$hasil1 = array();
		$hasil1['nama_kecamatan'] = 'Nama Kecamatan';
		foreach ($pbb as $key){
			$hasil1['data'][] = $key->nama_kecamatan;
		}
		
		$hasil2 = array();
		$hasil2['target_pbb'] = 'Target PBB';
		foreach ($pbb as $key){
			$hasil2['data'][] = $key->target_pbb;
		}
		
		$hasil3 = array();
		$hasil3['pendapatan_pbb'] = 'Pendapatan PBB';
		foreach ($pbb as $key){
			$hasil3['data'][] = $key->pendapatan_pbb;
		}
		
		$hasil4 = array();
		$hasil4['prosentase_pbb'] = 'Prosentase';
		foreach ($pbb as $key){
			$hasil4['data'][] = $key->prosentase;
		}
		
		array_push($kpbb, $hasil1);
		array_push($kpbb, $hasil2);
		array_push($kpbb, $hasil3);
		array_push($kpbb, $hasil4);

		print json_encode($kpbb, JSON_NUMERIC_CHECK);
	}
	
	function keluarpiehome()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		foreach ($pbb as $key){
			$hasil[0] = $key->nama_kecamatan;
			$hasil[1] = $key->target_pbb;
			$hasil[2] = $key->pendapatan_pbb;
			$hasil[3] = $key->prosentase;
			array_push($kpbb, $hasil);
		}		
		print json_encode($kpbb, JSON_NUMERIC_CHECK);
	}
	
	function pbb()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('pbbview');
	}
	
	function doinputpbb()
	{
		if($this->input->post('inputpbb'))
		{
			$data['recpbb'] = $this->datamodel->insertpbb();
			echo 'Input Successfull';
			redirect('homecon/pbb', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('homecon/inputpbb', 'refresh');
		}
	}
	
	function keluarlinepbb()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		$hasil1 = array();
		$hasil1['nama_kecamatan'] = 'Nama Kecamatan';
		foreach ($pbb as $key){
			$hasil1['data'][] = $key->nama_kecamatan;
		}
		
		$hasil2 = array();
		$hasil2['target_pbb'] = 'Target PBB';
		foreach ($pbb as $key){
			$hasil2['data'][] = $key->target_pbb;
		}
		
		$hasil3 = array();
		$hasil3['pendapatan_pbb'] = 'Pendapatan PBB';
		foreach ($pbb as $key){
			$hasil3['data'][] = $key->pendapatan_pbb;
		}
		
		$hasil4 = array();
		$hasil4['prosentase_pbb'] = 'Prosentase';
		foreach ($pbb as $key){
			$hasil4['data'][] = $key->prosentase;
		}
		
		array_push($kpbb, $hasil1);
		array_push($kpbb, $hasil2);
		array_push($kpbb, $hasil3);
		array_push($kpbb, $hasil4);

		print json_encode($kpbb, JSON_NUMERIC_CHECK);
	}
	
	function keluarpiepbb()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		foreach ($pbb as $key){
			$hasil[0] = $key->nama_kecamatan;
			$hasil[1] = $key->target_pbb;
			$hasil[2] = $key->pendapatan_pbb;
			$hasil[3] = $key->prosentase;
			array_push($kpbb, $hasil);
		}		
		print json_encode($kpbb, JSON_NUMERIC_CHECK);
	}
	
	function nonpbb()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('nonpbbview');
	}
	
	function doinputnonpbb()
	{
		if($this->input->post('inputnonpbb'))
		{
			$data['recnonpbb'] = $this->datamodel->insertpbb();
			echo 'Input Successfull';
			redirect('homecon/nonpbb', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('homecon/inputnonpbb', 'refresh');
		}
	}
	
	function keluarpienon()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		foreach ($pbb as $key){
			$hasil[0] = $key->nama_kecamatan;
			$hasil[1] = $key->target_pbb;
			$hasil[2] = $key->pendapatan_pbb;
			$hasil[3] = $key->prosentase;
			array_push($kpbb, $hasil);
		}		
		print json_encode($kpbb, JSON_NUMERIC_CHECK);
	}
	
	function lain()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['status'] = $session_data['status'];
		$this->load->view('menu', $data);
		$this->load->view('lainview');
	}
	
	function doinputlain()
	{
		if($this->input->post('inputlain'))
		{
			$data['reclain'] = $this->datamodel->insertpbb();
			echo 'Input Successfull';
			redirect('homecon/lain', 'refresh');
		}
		else
		{
			echo 'Input Unsuccessfull';
			redirect('homecon/inputlain', 'refresh');
		}
	}

	function keluarpielain()
	{
		$pbb = $this->usermodel->showPBB()->result();
		$kpbb = array();
		
		foreach ($pbb as $key){
			$hasil[0] = $key->nama_kecamatan;
			$hasil[1] = $key->target_pbb;
			$hasil[2] = $key->pendapatan_pbb;
			$hasil[3] = $key->prosentase;
			array_push($kpbb, $hasil);
		}		
		print json_encode($kpbb, JSON_NUMERIC_CHECK);
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