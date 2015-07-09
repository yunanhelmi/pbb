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
                            <?php echo form_open('homecon/veriflogin'); ?> 
                                <h1>LOGIN</h1> 
                                <p> 
                                    <label for="username" class="uname"> Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="**********" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Belum Mendaftar ?
									<a href="#toregister" class="to_register">Daftar</a>
								</p>
                            <?php echo form_close(); ?>
                        </div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>