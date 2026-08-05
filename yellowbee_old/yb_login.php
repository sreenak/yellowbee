
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	    <script src='https://www.google.com/recaptcha/api.js'></script>


	

</head>
<style>input[type="checkbox"] {
  -webkit-appearance: checkbox;
     -moz-appearance: checkbox;
          appearance: checkbox;
  display: inline-block;
  width: auto;
}</style>
<body>
<div id="w3lDemoBar" class="w3l-demo-bar">
  <a href="https://w3layouts.com/?p=38412" ga-on="click" ga-event-category="Trendz Login Form Template" ga-event-action="view" ga-event-label="Trendz Login Form - view">
    <span class="w3l-icon -back">
        
  </div>
</div>

	<section class="w3l-forms-23" style="background: #0c1425c7;">
		<div class="forms23-block-hny">
			<div class="wrapper">
				
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

		<!---728x90--->

		
		</div>
		<!-- 
				<h1>Trendz Login Form</h1>
				 if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				 -->
				
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

		<!---728x90--->
		
		</div>
		
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg" style="background: #f1f12787;
">
							<h6 class="sec-one" style="padding-top: 50px;"><a  href="home"><img  src="images/yellow_bee_logo.png" alt="Yellow bee logo" style="width: 50%;"></a></h6>
							<div class="speci-login first-look" style="background: #white;">
								<img src="images/user.png" alt="" class="img-responsive">
								<iframe src="https://giphy.com/embed/RGvJD7iJehKK57K2TG" width="50" height="50" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
							</div>
						</div>
						<div class="bottom-content">

							
							<form method="post" action="yb_login.php" >
								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		          				<?php echo display_error(); ?>
		          				
								<input type="username" name="username" class="input-form" placeholder="username" required="required">
								<input type="password" name="password" class="input-form" placeholder="Your Password" required="required">
								<input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
								<div class="g-recaptcha" data-sitekey="6LfIqcsZAAAAAPsmnFD0gUENwtIEiB209UH4eidi"></div>
								<button type="submit" class="loginhny-btn btn"  name="login_btn">Login</button>
								
							</form>
							
												<p>© <script>document.write(new Date().getFullYear());</script> Yellow Bee. All rights reserved </p>
												<!-- 
 <p>Not a member yet? <a href="#">Join Now!</a></p> -->
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
</body>
</html>



