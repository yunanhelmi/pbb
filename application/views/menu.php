<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Aplikasi Monitoring Pendapatan Kabupaten Madiun</title>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/api/js/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylemenu.css" type="text/css">
		
	</head>
	<body>
		<div class="CSSTableGenerator" >
			<table>
				<tr>
					<?php
					if($status == 1)
					{
					?>
					<td><a href="<?php echo base_url()?>index.php">HOME</a></td>
					<td><a href="http://36.74.100.179/mon/index.php/report/pbb">INPUT PBB</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/nonpbb">PBB</a></td>
					<td><a href="http://36.74.100.179/mon/index.php/report/dataNonPbb">INPUT NON-PBB</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/pbb">NON-PBB</a></td>
					<td><a href="http://36.74.100.179/mon/index.php/report/dataLain">LAIN-LAIN</a></td>
					<td><a href="<?php echo base_url()?>index.php/usercon/logout">LOGOUT</a></td>
					<?php
					}
					else
					{
					?>
					<td width="20%"><a href="<?php echo base_url()?>index.php">HOME</a></td>
					<td width="20%"><a href="<?php echo base_url()?>index.php/homecon/pbb">PBB</a></td>
					<td width="20%"><a href="<?php echo base_url()?>index.php/homecon/nonpbb">NON-PBB</a></td>
					<td width="20%"><a href="http://36.74.100.179/mon/index.php/report/dataLain">LAIN-LAIN</a></td>
					<td><a href="<?php echo base_url() ?>index.php/usercon/login">LOGIN</a></td>
					<?php
					}
					?>
				</tr>
			</table>
		</div>
		<br/>
		<br/>
