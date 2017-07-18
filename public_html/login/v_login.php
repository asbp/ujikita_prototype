<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login into PMO</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 1.3.2 -->
		<link href="<?php echo base_url("media")?>/bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="<?php echo base_url("media")?>/plugins/font-awesome/css/font-awesome.min.css" rel="Stylesheet" type="text/css" />
		<!-- Theme Style -->
		<link href="<?php echo base_url("media")?>/admin-lte/css/AdminLTE.min.css" rel="Stylesheet" type="text/css" />
		<!-- iCheck -->
		<link href="<?php echo base_url("media")?>/plugins/iCheck/square/blue.css" rel="Stylesheet" type="text/css" />
		
        <script>
        
        </script>
        
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file :// -->
		<!--[if it IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="../../index2.html"><b>Login</b></a>
                
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<!-- Feedback -->
				<?php if (!empty(@$success)) { ?>
				<div class="alert alert-success">
					<?php echo @$success ?>
				</div>
				<?php } ?>
				<div class="alert alert-danger">
					<?php echo @$error ?>
				</div>
				<!-- End of Feedback -->
				<p class="login-box-msg">Sign in to start your session</p>
				<form  method="post" id="loginForm">
					<div class="form-group has-feedback">
						<input name="username" id="username" type="text" class="form-control" placeholder="Username" required/>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input name="password" id="password"  type="password" class="form-control" placeholder="Password" required/>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button type="submit" id="login_button" class="btn btn-primary btn-block btn-flat">Sign In</button>
						</div><!-- /.col -->
					</div>
				</form>
				
				
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
		
		<!-- jQuery 2.1.3 -->
		<script src="<?php echo base_url("media")?>/jquery/jquery.min.js"></script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="<?php echo base_url("media")?>/bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url("media")?>/plugins/iCheck/icheck.min.js"></script>
		<script>
                $('.alert-success').hide();
                $('.alert-danger').hide();
            
                
                 $('#loginForm').submit(function(e){
                    e.preventDefault();
                     
                    var username = $("#username").val();
                    var password= $("#password").val();
                     
                     if(!username) {
                     return;
                     }
                     
                     if(!password) {
                     return;
                     }
                     
                    $.ajax({
                        type: "post",
                        url: "login/do_login",
                        data: {username:username,password:password},
                        dataType:"json",
                        success:function(data)
                        {
                            if(data=="true") {
                                window.location="login";
                                
                            } else {
                                <?php $this->session->set_flashdata("error", "Wrong login credentials!"); ?>
                                $('.alert-danger').html('<?php echo $this->session->flashdata('error'); ?>').fadeIn();
                            }
                        }
                    });
                });

         
			
            
		</script>
	</body>
</html>