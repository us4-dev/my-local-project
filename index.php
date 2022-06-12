<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<link rel="shortcut icon" href="assets/images/favicon.png" />
      <link rel="stylesheet" href="assets/css/style.css">
	   <link rel="stylesheet" href="assets/css/login.css">
      
	  
	
	 
  </head>
  <body>
  
  
  <div class="container-scroller">
  
  
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
		
		
  <div class="form-wrap">
		<div class="logo_wrap">
			<div class="logo"><img src="assets/images/edha-care-login-logo.png"></div>
			<div class="logo-heading">Login with EdhaCare</div>
		</div>	
  
		<div class="tabs">
      <h3 class="login-tab"><a href="#login-tab-content" class="active">Partner Login</a></h3>
			<h3 class="signup-tab"><a  href="#signup-tab-content">Create account</a></h3>
			
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="login-tab-content" class="active">
				<form class="login-form" action="" method="post">
					<div class="input-icons"><i class="fa fa-envelope-o icon"></i>
					<input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email" value="EdhaCare"></div>
					<div class="input-icons"><i class="fa fa-lock icon"></i>
					<input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password" value="EdhaCare"></div>
					
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="button" class="button" value="Login" onclick="location.href='dashboard.php';">
				</form>
				<!--.login-form-->
				<div class="help-text">
					<p>Don't have an account? <a href="#signup-tab-content">Create Acount</a></p>
				</div>
				<p style="text-align:center"><a href="#">Forget your password?</a></p>
				<!--.help-text-->
			</div><!--.login-tab-content-->

      <div id="signup-tab-content" >
				<form class="signup-form" action="" method="post">
					<div class="input-icons"><i class="fa fa-user icon"></i>
					<input type="text" class="input" id="user_name" autocomplete="off" placeholder="Name"></div>
					
					<div class="input-icons"><i class="fa fa-envelope-o icon"></i>
					<input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email"></div>
					
					<div class="input-icons"><i class="fa fa-lock icon"></i>
					<input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password"></div>
					
					<div class="input-icons"><i class="fa fa-phone-square icon"></i>
					<input type="text" class="input" id="user_phone" autocomplete="off" placeholder="Phone no"></div>
					
					<div class="input-icons"><i class="fa fa-map-marker icon"></i>
					<select>
						<option>Select country</option>
						<option>India</option>
						<option>UAE</option>
					</select></div>
					
					<input type="submit" class="button" value="Create Account">
				</form>
				<!--.login-form-->
				<div class="help-text- login-frm">
					<p>Have an account? <a href="login.html">Login</a></p>
				</div>
				<!--.help-text-->
			</div>
			<!--.signup-tab-content-->

		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
	
	<div></div></div>
	
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script>
     jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');
	

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
	
	
});
      </script>
	   <script>
              $('.help-text a').on('click', function(event){
			  event.preventDefault();
            $('.form-wrap .tabs h3 a.active').removeClass('active');
            $('.form-wrap .signup-tab a').addClass('active');
			
			tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
                });
				
				$('[lang="es"]').hide();
$('[lang="zh"]').hide();

$('#lang-switch').change(function () {
  var lang = $(this).val();
  switch (lang) {
    case 'en': 
      $('[lang]').hide();
      $('[lang="en"]').show();
      break;
    case 'es':
      $('[lang]').hide();
      $('[lang="es"]').show();
      break;
    case 'zh':
      $('[lang]').hide();
      $('[lang="zh"]').show();
      break;
    default:
      $('[lang]').hide();
      $('[lang="en"]').show();
  }
});
				
				
      </script>
	  
	

</body>
</html>
