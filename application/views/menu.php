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
	<?php
		if (empty($username)) 
			{
				echo "<h2>Welcome Guest</h2>";
			}
		else
			{
				echo "<h2>Active User : <span>$username </h2>";
			}
	?>
		<div class="CSSTableGenerator" >
			<table>
				<tr>
					<?php
					if($status == 1 && !empty($username))
					{
					?>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php">HOME</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/inputpbb">INPUT PBB</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/pbb">PBB</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/inputnonpbb">INPUT NON-PBB</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/nonpbb">NON-PBB</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/inputlain">INPUT LAIN-LAIN</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/homecon/lain">LAIN-LAIN</a></td>
					<td width="12.5%"><a href="<?php echo base_url()?>index.php/usercon/logout">LOGOUT</a></td>
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
