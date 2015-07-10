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
                            <?php echo form_open('usercon/do_register'); ?> 
                                <h1> Register </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="username" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="email address"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="**********"/>
                                </p>
								<p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Confirm your password </label>
                                    <input id="password" name="passwordcon" required="required" type="password" placeholder="**********" /> 
                                </p>
								<?php echo validation_errors();?>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="register"/> 
								</p>
                                <p class="change_link">  
									Sudah Mendaftar ?
									<a href="<?php echo base_url()?>index.php/usercon/login" class="to_login"> LOGIN </a>
								</p>
                            <?php echo form_close(); ?>
                        </div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>