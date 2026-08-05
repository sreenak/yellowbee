<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yellow Bee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/admin.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	.fakeimg {
		height: 200px;
		background: #aaa;
	}

</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a href="../home.php"> <img  src="../../images/yellow_bee_logo.png" alt="Yellow bee logo" style="width: 150px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="col-md-8 collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../.." target="_blank">View Website</a>
				</li>
				<!--<li class="nav-item">-->
				<!--	<a class="nav-link active" href="../users/add.php"> + Add user</a>      </li>-->
					<li class="nav-item">
						<a class="nav-link" href="../galleries/index.php"> + Gallery</a>
					</li> 
					<li class="nav-item">
						<a class="nav-link" href="../categories/index.php"> + Services</a>
					</li>  

				</ul>
			</div> 
			<div class="col-md-3 collapse navbar-collapse" id="collapsibleNavbar" style="width: auto;">
				<ul class="navbar-nav">
					<li>
						<a class="nav-link"><?php  if (isset($_SESSION['user'])) : ?>
						<strong><?php echo strtoupper($_SESSION['user']['username']); ?></strong>
						<small>
							<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
							<?php endif ?></small></a>
						</li>
						<li class="nav-item pull-right">
							<a class="nav-link" href="../home.php?logout='1'" style="color: red;">Logout</a>
						</li>
					</ul>
				</div> 
			</nav>




		</body>
		</html>
