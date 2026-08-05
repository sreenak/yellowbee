<?php include('../../functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yellow Bee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/admin.css" rel="stylesheet" type="text/css">
	<link href="../../css/form.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	.fakeimg {
		height: 200px;
		background: #aaa;
	}
	
	.wrap-input100a {
    width: 100%;
    position: relative;
    border-bottom: 2px solid #d9d9d9;
    padding-bottom: 0px;
    margin-bottom: 5px;
	}
	.wrap-input100a {
    width: 100%;
    position: relative;
    padding-bottom: 0px;
    margin-bottom: 5px;
	}
	.label-input100a {
  
 	 font-size: 18px;
 	 color: #666666;
 	 line-height: 1.5;
 	 padding-left: 5px;
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
			<div class="col-md-3 collapse navbar-collapse" id="collapsibleNavbar"  style="width: auto;">
				<ul class="navbar-nav">
					<li>
						<a class="nav-link"><?php  if (isset($_SESSION['user'])) : ?>
						<strong><?php echo $_SESSION['user']['username']; ?></strong>
						<small>
							<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
							<?php endif ?></small></a>
						</li>
						<li class="nav-item pull-right">
							<a class="nav-link" href="../home.php?logout='1'" style="color: red;">logout</a>
						</li>
					</ul>
				</div> 
			</nav>

<div class="container-contact100">
<div class="wrap-contact100">
<form method="post" action="add.php" class="contact100-form validate-form">
<h4 style="text-align: center;color: #7c1212">Add User</h4>
<div class="wrap-input100a validate-input" data-validate="Name is required">
<span class="label-input100a">Username</span>
<input class="input100" type="text" name="username" value="<?php echo $username; ?>">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100a validate-input" data-validate="Valid email is required: ex@abc.xyz">
<span class="label-input100a">Email</span>
<input class="input100" type="email" name="email" value="<?php echo $email; ?>">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100b input100-select">

<div style="padding-top: 10px;padding-bottom: 10px">
<select class="selection-2 select2-hidden-accessible" name="user_type" id="user_type"  tabindex="-1" aria-hidden="true">
	<option value="">Select User Type</option>
	<option value="admin">Admin</option>
</select>
</div>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100a validate-input" data-validate="Name is required">
<span class="label-input100a">Password</span>
<input class="input100" type="password" name="password_1">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100a validate-input" data-validate="Name is required">
<span class="label-input100a">Confirm Password</span>
<input class="input100" type="password" name="password_2">
<span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
<div class="wrap-contact100-form-btn">
<div class="contact100-form-bgbtn"></div>
<button name="register_btn" class="contact100-form-btn">
<span style="margin-top: 15px;">
Create User
<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</div>
</form>
</div>
</div>


</body>
</html>