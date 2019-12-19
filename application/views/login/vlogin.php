<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    
	
	<?php echo link_tag('assets/css/normalize.css'); ?>
	<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
	<?php echo link_tag('assets/css/font-awesome.min.css'); ?>
    <?php echo link_tag('assets/css/themify-icons.css'); ?>
	<?php echo link_tag('assets/css/flag-icon.min.css'); ?>
	<?php echo link_tag('assets/css/cs-skin-elastic.css'); ?>
	<?php echo link_tag('assets/scss/style.css'); ?>
	
    <?php echo link_tag('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800'); 
	//<link rel="shortcut icon" href="favicon.ico">
	?>


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                   
                </div>
                <div class="login-form">
				<center>Aplikasi Data Siswa</center>
				<br><br>
                    <form action="<?php echo base_url('index.php/login/login_progress'); ?>" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name='username' class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name='password' class="form-control" placeholder="Password">
                        </div>
                        
						<!--
						<div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
						-->
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        
						<!--
						<div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
						-->
						<br><br><br>
                        <div class="register-link m-t-15 text-center">
                           <!-- <p>Don't have account ? <a href="#"> Sign Up Here</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php echo link_tag('assets/js/vendor/jquery-2.1.4.min.js'); ?>
<?php echo link_tag('assets/js/popper.min.js'); ?>
<?php echo link_tag('assets/js/plugins.js'); ?>
<?php echo link_tag('assets/js/main.js'); ?>
	


</body>
</html>
