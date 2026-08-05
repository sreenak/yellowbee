<?php 
include('../../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../yb_login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../yb_login.php");
}

// Connect to MySQL
// MySQL query that selects all the images
$stmt = mysqli_query($db, "SELECT * FROM images ORDER BY uploaded_date DESC");
$images = $stmt;
/*--- We have created a variables to display error message ------*/
$error = "";
if (isset($_POST["btn_delete"]))
{
	/*-- we included connection files--*/
	$image_id = $_POST["img-id"];
	$res = mysqli_query($db,"SELECT * FROM images WHERE id = ' ".$_POST["img-id"]." ' ");
	$row = mysqli_fetch_array($res);
	if($image_id == ""){
		$error = "Please enter the Image id.";
	}
	else
	{
		mysqli_query($db,"delete from images where id = '". $image_id ."'") or die("Could not Connect to table: ". mysqli_error());
			//this code will delete image from folder
		print $row['path'];
		unlink($row['path']);
		$error = "<p align=center>File ".$row["path"].""."<br />Image has been deleted from table.</p>";
		header("location: index.php");
	}
}
?>
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

			<div class="container" style="width: 100%;height: 90vh;">
				<div class="row">
					<div class="content home">
					<h2 style="padding-top: 0px;">Gallery    		<a style="float: right;margin: 2px;" href="upload.php" class="upload-image ">+ Add Gallery</a>
					</h2>
			
				<p>Welcome to the gallery page, you can view the list of images below.</p>
				
			
				<div class=" row images">
					<?php
					echo '<div class="msg">';
					echo '</div>';
					
					
					while ($row = mysqli_fetch_array($images)) {
                       $category =  mysqli_query($db, "SELECT * FROM categories where cid='".$row['category_name']."' ");
                       	$category = mysqli_fetch_array($category);

						echo "<div class='col-md-3'>";
						echo "<a href='#' style='width:250px;height:150px;'>";
						echo "<img src='/uploads/".$row['path']."' width='250' height='150' class='photo-frame'>";
						echo "</a>";
						echo "<p style='margin:0px;'>".$category['name']."</p>";
						echo  " <a href='edit.php?id=".$row['id']."' style='display:inline;width:0px;height:0px;margin:0px;padding:0px;'>Edit</a>";
						echo " | ";
						echo "<a href='delete.php?id=".$row['id']."' data-confirm='Are you sure you want to delete this image?' data-method='delete' style='display:inline;width:0px;height:0px;margin:0px;padding:0px;'>Delete</a>";
						echo "<p>";
						// echo '<form method="post" enctype="multipart/form-data">';
						// echo '<input type="hidden" value="'.$row['id'].'" name="img-id"  />';
						// echo '<input type="submit" name="btn_delete" value="Delete image" />';
						// echo '</form>';
						echo "</p>";
						echo "</div>";

					}
					

					?>
				
			</div></div>
			<div class="image-popup"></div>
</div>
</div>
</body>
</html>