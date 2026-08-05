<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon_yellow_bee.png">
<title>Yellow Bee Cleaning & Hospitality WLL</title>
<meta charset="utf-8">
<meta name="description" content="Yellow Bee Cleaning Company in Qatar is a leading cleaning Contract Service Company. Providing best cleaning services for residential, commercial &amp; construction sites in Qatar.">
<meta name="keywords" content="yellowbee qatar,yellow bee qatar, yellow bee, yellow bee cleaning services, yellow bee cleaning, yellowbee, yellowbeeqatar, yellowbee cleaning services qatar, yellow, bee, cleaning companies in qatar,best cleaning services qatar, car cleaning services, car body washing qatar, car cleaning qatar,car body polishing services qatar,vaccum services qatar,  cleaning companies qatar,cleaning services in qatar,cleaning service qatar,cleaning qatar,pest control service qatar,pest control qatar,cleaning company qatar,cleaning company in qatar,post construction cleaning company in qatar,water tank cleaning service qatar,cleaning,qatar,companies,cleaning service company,cleaning service,cleaning qatar,kitchen duct cleaning company in qatar, Hvac cleaning company in qatar,air duct cleaning companies in qatar, carpet shampoo qatar,commercial cleaning qatar, sanitation service, disinfection service qatar, cleaning &amp; sanitation, cleaning &amp; disinfection">
<link rel="canonical" href="http://yellowbeeqatar.com/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Best Cleaning Services Company in Qatar | Doha | Yellow Bee Qatar">
<meta property="og:description" content="Yellow Bee is a leading cleaning Contract Service Company. Providing best cleaning services for residential, vehicles, commercial &amp; construction sites in Qatar.">
<meta property="og:url" content="http://yellowbeeqatar.com/">
<meta property="og:site_name" content="Yellow Bee Qatar">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/67aef3366d.js" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style type="text/css">
.simple-banner {
    background: #ffff00;
}
.simple-banner {
	width: 100%;
	text-align: center;
	z-index: 99999;
	position: fixed;    
	display: block;
}
.simple-banner .simple-banner-text {
   color: #000000;
}
.simple-banner .simple-banner-text {
	font-size: 12px;
	font-weight: 700;
}
.navbar {
	position: fixed;
	width: 100%;
	display: block;
	transition: top 0.3s;
}
.navbar a {
  display: block;
}
.shadowfilter {
	-webkit-filter: drop-shadow(0px 0px 0px rgba(255,255,255,0.80));
	-webkit-transition: all 0.5s linear;
	-o-transition: all 0.5s linear;
	transition: all 0.5s linear;
}
.shadowfilter:hover {
	-webkit-filter: drop-shadow(0px 0px 2px rgb(197 178 33));
}
</style>
</head>

<body>
	<?php if (isset($_SESSION['success'])) : ?>
		<?php 
		echo $_SESSION['success']; 
		unset($_SESSION['success']);
		?>
	<?php endif ?>
	<?php  if (isset($_SESSION['user'])) : ?>
		<strong><?php echo $_SESSION['user']['username']; ?></strong>
		<small>
			<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
			<br>
			<a href="index.php?logout='1'" style="color: red;">logout</a>
		</small>
	<?php endif ?>





</div>

<nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light" id="ftco-navbar" style="       box-shadow: rgb(169 162 125) 0px 2px 5px 2px;border-bottom: 2px solid #fbd101
;height: 70px;">
	<div class="container-fluid">
<!-- 		<iframe src="https://giphy.com/embed/j0wW5tjvyKXvABbynw" width="60" height="40" frameBorder="0" class="giphy-embed hidden-xs hidden-sm" ></iframe>

 -->		
 <img src="images/befly.png">
<a class="navbar-brand" href="home" >	

			<img src="images/yelow_bee_logo_blk.png" alt="Yellow bee logo"  class="shadowfilter" title="Yellow Bee Cleaning & Hospitality WLL"><br/><span class="pull-left">

			</span>
		</a>
						<a style="color:white;background: #2989d8;border-radius: 2px;padding: 3px 8px;" href="tel:+97470143055" class="header-links"  > <i class="fas fa-phone headericon" style="color:white"></i> +974 70143055  </a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav"style="height: 70px;">

			<ul class="navbar-nav mx-auto">
				<?php $current_page = $_SERVER['REQUEST_URI']; ?>
				<li class="nav-item <?php if ($current_page=="/home") {echo "active"; }?>">
					<a class="nav-link" href="home">HOME</a>
				</li>
				<li class="nav-item <?php if ($current_page=="/about") {echo "active"; }?>">
					<a href="about" class="nav-link ">ABOUT US</a>
				</li>
				<li class="nav-item <?php if ($current_page=="/services") {echo "active"; }?>">
					<a href="services" class="nav-link ">SERVICES</a>
				</li>
				<li class="nav-item <?php if ($current_page=="/gallery") {echo "active"; }?>">
					<a href="gallery" class="nav-link">GALLERY</a>
				</li>
				<li class="nav-item <?php if ($current_page=="/contact") {echo "active"; }?>">
					<a href="contact" class="nav-link">CONTACT</a>
				</li>
			</ul>
 							<!--<img src="images/befly.png">-->

	<!-- 		<a class="linkstaticdt-fb" href="https://www.facebook.com/7716Y"><span class="fa fa-facebook linkstaticicon"></span></a> 
				<a class="linkstaticdt-ins" href="https://www.instagram.com/invites/contact/?i=qwmxx7h60a1i&utm_content=38vtt16"><span class="fa fa-instagram linkstaticicon"></span></a> -->
		</div>
		<div class="call-img">
			<!--  -->
				<!-- <a href="tel:+97470143055" class="header-links" > <i class="fas fa-phone headericon"></i> +974 70143055  </a>-->
				<a href="mailto:yellowbeeqatar@gmail.com" class="header-links gmaillink"> <i class="fas fa-envelope  headericon"></i>yellowbeeqatar@gmail.com</a>  
 
		</div>
		<div id="contactusdiv" class="contactvia">
			<!--  -->
			<a class="linkstaticdt-fb" href="https://www.facebook.com/7716Y"><span class="fa fa-facebook linkstaticicon" title="Visit us in facebook"></span></a> 
				<a class="linkstaticdt-ins" href="https://www.instagram.com/invites/contact/?i=qwmxx7h60a1i&utm_content=38vtt16" title="Visit us in Instagram"><span class="fa fa-instagram linkstaticicon"></span></a>
				<a href="tel:+97470143055" class="linkstaticdt-call" title="Call Us"><span class="fa fa-phone linkstaticicon"></span></a> 

			<!-- <div class="call" style=" color: #000000;">
				<a href="tel:+97470143055"><img src="images/call_bg.png" alt="call us"></a> 
			</div>
			<p class="call-title"><a class="call-ph" href="tel:+97470143055">Call Us</a></p> -->
		</div>
		
	</div>
</nav>


    <!-- END nav -->