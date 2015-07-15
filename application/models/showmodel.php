<?php
	class ShowModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function showpbb()
		{
			$q = $this->db->get('datapbb');
			return $q;
		}
		
		function shownon()
		{
			$q = $this->db->get('datanon');
			return $q;
		}
		
		function showlain()
		{
			$q = $this->db->get('datalain');
			return $q;
		}
		
		function showsumpbb()
		{
			$q = $this->db->get('datasumpbb');
			return $q;
		}
		
		function showsumnon()
		{
			$q = $this->db->get('datasumnon');
			return $q;
		}
		
		function showsumlain()
		{
			$q = $this->db->get('datasumlain');
			return $q;
		}
	}
?>