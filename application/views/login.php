<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MOMON - Login Form</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/login/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/login/ico/apple-touch-icon-57-precomposed.png">

        <style type="text/css">
            body { background: url(<?php echo base_url(); ?>assets/login/img/backgrounds/1.jpg) !important; }
        </style>

    </head>

    <body>
    <?php echo form_open("login/login_process"); ?>
    <?php echo $error; ?>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>MOMON</strong> Login Form</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to MOMON Network Monitoring</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...connect me on:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="https://www.facebook.com/handri.hermawan13">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="https://www.instagram.com/handrihmw">
	                        		<i class="fa fa-instagram"></i> Instagram
	                        	</a>
	                        	<a class="btn btn-link-2" href="https://plus.google.com/u/0/+HandriHermawan">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/login/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/login/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/login/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    <?php echo form_close(); ?>
    </body>

</html>