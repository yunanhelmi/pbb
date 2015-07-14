<?php
	class DataModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function insertpbb()
		{
			$kecamatan = $this->input->post('kecamatan');
			
			$targetpbb1 = $this->input->post('tagetpbb1');
			$targetpbb2 = $this->input->post('tagetpbb2');
			$targetpbb3 = $this->input->post('tagetpbb3');
			$targetpbb4 = $this->input->post('tagetpbb4');
			$targetpbb5 = $this->input->post('tagetpbb5');
			$targetpbb = $targetpbb1.$targetpbb2.$targetpbb3.$targetpbb4.$targetpbb5;
			
			$pendapatanpbb1 = $this->input->post('pendapatanpbb1');
			$pendapatanpbb2 = $this->input->post('pendapatanpbb2');
			$pendapatanpbb3 = $this->input->post('pendapatanpbb3');
			$pendapatanpbb4 = $this->input->post('pendapatanpbb4');
			$pendapatanpbb5 = $this->input->post('pendapatanpbb5');
			$pendapatanpbb = $pendapatanpbb1.$pendapatanpbb2.$pendapatanpbb3.$pendapatanpbb4.$pendapatanpbb5;
			
			$dendapbb1 = $this->input->post('dendapbb1');
			$dendapbb2 = $this->input->post('dendapbb2');
			$dendapbb3 = $this->input->post('dendapbb3');
			$dendapbb4 = $this->input->post('dendapbb4');
			$dendapbb5 = $this->input->post('dendapbb5');
			$dendapbb = $dendapbb1.$dendapbb2.$dendapbb3.$dendapbb4.$dendapbb5;
			
			$tahunpbb = $this->input->post('tahunpbb');
			
			$prosentasepbb = $pendapatanpbb/$targetpbb;
			
			$data=array(
				'nama_kecamatan'=>$kecamatan,
				'target_pbb'=>$targetpbb,
				'pendapatan_pbb'=>$pendapatanpbb,
				'tahun_pbb'=>$tahunpbb,
				'prosentase'=>$prosentasepbb,
				'denda_pbb'=>$dendapbb
			);
			
			$this->db->insert('datapbb', $data);
			return true;
		}
		
		function insertnonpbb()
		{
			$namapajaknon = $this->input->post('namapajaknon');
			
			$targetnon1 = $this->input->post('tagetnon1');
			$targetnon2 = $this->input->post('tagetnon2');
			$targetnon3 = $this->input->post('tagetnon3');
			$targetnon4 = $this->input->post('tagetnon4');
			$targetnon5 = $this->input->post('tagetnon5');
			$targetnon = $targetnon1.$targetnon2.$targetnon3.$targetnon4.$targetnon5;
			
			$realisasinon1 = $this->input->post('realisasinon1');
			$realisasinon2 = $this->input->post('realisasinon2');
			$realisasinon3 = $this->input->post('realisasinon3');
			$realisasinon4 = $this->input->post('realisasinon4');
			$realisasinon5 = $this->input->post('realisasinon5');
			$realisasinon = $realisasinon1.$realisasinon2.$realisasinon3.$realisasinon4.$realisasinon5;
			
			$dendanon1 = $this->input->post('dendanon1');
			$dendanon2 = $this->input->post('dendanon2');
			$dendanon3 = $this->input->post('dendanon3');
			$dendanon4 = $this->input->post('dendanon4');
			$dendanon5 = $this->input->post('dendanon5');
			$dendanon = $dendanon1.$dendanon2.$dendanon3.$dendanon4.$dendanon5;
			
			$tahunnon = $this->input->post('tahunnon');
			
			$prosentasenon = $realisasinon/$targetnon;
			
			$data=array(
				'nama_pajak_non'=>$namapajaknon,
				'target_pajak_non'=>$targetnon,
				'realisasi_pajak_non'=>$realisasinon,
				'tahun_non'=>$tahunnon,
				'prosentase_non'=>$prosentasenon,
				'denda_non'=>$dendanon
			);
			
			$this->db->insert('datanonpbb', $data);
			return true;
		}
		
		function insertnonpbb()
		{
			$namapajaklain = $this->input->post('namapajaklain');
			
			$targetlain1 = $this->input->post('targetlain1');
			$targetlain2 = $this->input->post('targetlain2');
			$targetlain3 = $this->input->post('targetlain3');
			$targetlain4 = $this->input->post('targetlain4');
			$targetlain5 = $this->input->post('targetlain5');
			$targetlain = $targetlain1.$targetlain2.$targetlain3.$targetlain4.$targetlain5;
			
			$realisasilain1 = $this->input->post('realisasilain1');
			$realisasilain2 = $this->input->post('realisasilain2');
			$realisasilain3 = $this->input->post('realisasilain3');
			$realisasilain4 = $this->input->post('realisasilain4');
			$realisasilain5 = $this->input->post('realisasilain5');
			$realisasilain = $realisasilain1.$realisasilain2.$realisasilain3.$realisasilain4.$realisasilain5;
			
			$dendalain1 = $this->input->post('dendalain1');
			$dendalain2 = $this->input->post('dendalain2');
			$dendalain3 = $this->input->post('dendalain3');
			$dendalain4 = $this->input->post('dendalain4');
			$dendalain5 = $this->input->post('dendalain5');
			$dendalain = $dendalain1.$dendalain2.$dendalain3.$dendalain4.$dendalain5;
			
			$tahunlain = $this->input->post('tahunlain');
			
			$prosentaselain = $realisasilain/$targetlain;
			
			$data=array(
				'nama_pajak_lain'=>$namapajaklain,
				'target_pajak_lain'=>$targetlain,
				'realisasi_pajak_lain'=>$realisasilain,
				'tahun_lain'=>$tahunlain,
				'prosentase_lain'=>$prosentaselain,
				'denda_lain'=>$dendalain
			);
			
			$this->db->insert('datalainlain', $data);
			return true;
		}
	}
?>