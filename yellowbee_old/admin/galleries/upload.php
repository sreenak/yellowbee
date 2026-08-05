<?php include('../../functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
// The output message
$msg = '';
// Check if user has uploaded new image
if (isset($_FILES["files"])) {
	// The folder where the images will be stored

$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {

    $file_name=$_FILES["files"]["name"][$key];
    $file_size=$_FILES["files"]["size"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
	// The path of the new uploaded image
    $title = mysqli_real_escape_string($db, $_POST['title']);
  	$description = mysqli_real_escape_string($db, $_POST['description']);
  	$category = mysqli_real_escape_string($db, $_POST['category']);
    $trn_date = date("Y-m-d H:i:s");
	$target_dir = '/home/wb3gpmj4ae5n/public_html/uploads/';
	// $target_dir = '/opt/lamp/htdocs/yelo_bee_qatar/uploads/';
	// $target_dir = 'uploads/';
	// The path of the new uploaded image
	$image_path = $target_dir . basename($file_name);
	// Check to make sure the image is valid
	if (!empty($file_tmp) && getimagesize($file_tmp)) {
		if (file_exists($image_path)) {
			$msg = 'Image already exists, please choose another or rename that image.';
		// } else if ($file_size > 500000) {
		// 	$msg = 'Image file size too large, please choose an image less than 500kb.';
		} else {
			// Everything checks out now we can move the uploaded image
			move_uploaded_file($file_tmp, $image_path);
			// Connect to MySQL
		}
	}
   
		$sql = "INSERT INTO `images` (`user_id`, `title`, `category_name`, `path`, `description`, `uploaded_date`) VALUES ('".$_SESSION['user']['id']."', '$title', '$category', '$file_name','$description','$trn_date')";
  			// Insert image info into the database (title, description, image path, and date added)
			mysqli_query($db, $sql);
}
  		header("location: index.php");
                echo "Image uploaded successfully.";
             	  	
}
 else {
		$msg = 'Upload Images and details here!';
	}
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

.label-input100a {
   	font-size: 18px;
 	color: #666666;
 	line-height: 1.5;
  	padding-left: 5px;
	}
.wrap-input100a {
    width: 100%;
    position: relative;
    border-bottom: 2px solid #d9d9d9;
    padding-bottom: 13px;
    margin-bottom: 5px;
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
				<!--	<a class="nav-link" href="../users/add.php"> + Add user</a>      </li>-->
					<li class="nav-item">
						<a class="nav-link active" href="index.php"> + Gallery</a>
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
<div class="container-contact100">
<div class="wrap-contact100">
<form method="post" enctype="multipart/form-data" style="padding: 10px;" class="contact100-form validate-form">

<h4 style="text-align: center;color: #7c1212">Add Gallery</h4>

<div class="wrap-input100a input100-select">
<div>
	<label class="label-input100a" for="category" >Service</label>
		<?php
$selection=mysqli_query($db, "select * from categories");
echo '<select class="selection-2 select2-hidden-accessible category-select" name="category" id="category"  tabindex="-1" aria-hidden="true">
 >
      <option value="0">Select Service</option>';

foreach($selection as $selection){
    $selected=($options == $selection[cid])? "selected" : "";
echo '<option'.$selected.' value="'.$selection[cid].'">'.$selection[name].'</option>';
    }

echo '</select>';
?>
</div>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100a validate-input" data-validate="Name is required">
<span class="label-input100a">Choose Images</span>
<input class="input100" type="file" name="files[]"  accept="image/*" id="image"  multiple>
<span class="focus-input100"></span>
</div>
<!-- <div class="wrap-input100a validate-input" >
<span class="label-input100a">Title</span>
<input class="input100" type="text" name="title" id="title">
<span class="focus-input100"></span>
</div> -->

<!-- <div class="wrap-input100a validate-input" data-validate="Message is required"> -->
<!-- <span class="label-input100a">Description</span>
<textarea class="input100" style="min-height: 60px;" name="description" placeholder="Enter description..."></textarea>
 -->
<!-- <span class="focus-input100"></span> -->
<!-- </div> -->

<button type="submit" value="Upload Image" name="submit" class="btn btn-success">
<span style="margin-top: 15px;">
Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>

</form>
</div>
</div>
</body>
</html>