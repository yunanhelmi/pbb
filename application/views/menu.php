<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Aplikasi Monitoring Pendapatan Kabupaten Madiun</title>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/api/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts-3d.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/modules/exporting.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylemenu.css" type="text/css">
		
	</head>
	<body>
<<<<<<< HEAD
		
=======
		<h2>Welcome <?php 
			if (empty($username)) 
			{
				echo 'guest';
			}
			else
			{
				echo $username;
			}?>
		</h2>
>>>>>>> 9bf150629bff798d04192599d983c375ff7d8d4f
		<div class="CSSTableGenerator" >
			<table>
				<tr>
					<?php
					if($status == 1 && !empty($username))
					{
					?>
					<td><a href="<?php echo base_url()?>index.php">HOME</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/inputpbb">INPUT PBB</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/pbb">PBB</a></td>
					<td><a href="http://36.74.100.179/mon/index.php/report/dataNonPbb">INPUT NON-PBB</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/nonpbb">NON-PBB</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/lain">INPUT LAIN-LAIN</a></td>
					<td><a href="<?php echo base_url()?>index.php/homecon/lain">LAIN-LAIN</a></td>
					<td><a href="<?php echo base_url()?>index.php/usercon/logout">LOGOUT</a></td>
					<?php
					}
					else
					{
					?>
					<td width="20%"><a href="<?php echo base_url()?>index.php">HOME</a></td>
					<td width="20%"><a href="<?php echo base_url()?>index.php/homecon/pbb">PBB</a></td>
					<td width="20%"><a href="<?php echo base_url()?>index.php/homecon/nonpbb">NON-PBB</a></td>
					<td width="20%"><a href="<?php echo base_url()?>index.php/homecon/lain">LAIN-LAIN</a></td>
					<td><a href="<?php echo base_url() ?>index.php/usercon/login">LOGIN</a></td>
					<?php
					}
					?>
				</tr>
			</table>
		</div>
		<div id="tahun">
			<select>
				<?php 
					foreach($tahun as $row)
					{ 
					  echo '<option value="'.$row->description.'">'.$row->description.'</option>';
					}
				?>
			</select>
		</div>
		<br/>
		<br/>
