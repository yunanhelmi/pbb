<html>
	<head>
		<meta charset="UTF-8" />
		<title>Login Aplikasi Monitoring Pendapatan Kabupaten Madiun</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate-custom.css" />
	</head>
	<body>
		<div class="container">
			<section>
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
                            <?php echo form_open('usercon/veriflogin'); ?> 
                                <h1>Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u"> Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="**********" /> 
                                </p>
								<?php echo validation_errors();?>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login"/> 
								</p>
                                <p class="change_link">
									Belum Mendaftar ?
									<a href="<?php echo base_url()?>index.php/usercon/register" class="to_register">Daftar</a>
								</p>
                            <?php echo form_close(); ?>
                        </div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>