<?php 
include('../../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../yb_login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../yb__login.php");
}

// Connect to MySQL
// MySQL query that selects all the images
$stmt = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date DESC");
$categories = $stmt;
/*--- We have created a variables to display error message ------*/
$error = "";

if (isset($_POST["btn_delete"]))
{
	/*-- we included connection files--*/
	$image_id = $_POST["img-id"];
	$res = mysqli_query($db,"SELECT * FROM categories WHERE id = ' ".$_POST["img-id"]." ' ");
	$row = mysqli_fetch_array($res);
	if($image_id == ""){
		$error = "Please enter the Image id.";
	}
	else
	{
		mysqli_query($db,"delete from categories where id = '". $image_id ."'") or die("Could not Connect to table: ". mysqli_error());
			//this code will delete image from folder
		$error = "<p align=center>File ".$row["path"].""."<br />Category has been deleted from table.</p>";
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
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}

h1{
  font-size: 20px;
  color: black;
  font-weight: 300;
  margin-bottom: 10px;
  
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: grey;
 }
.tbl-content{
  height:400px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid grey;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: black;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: black;
  border-bottom: solid 1px grey;
}


/* demo styles */

body{
	/*background: #BFE6BA ;*/
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
} 
::-webkit-scrollbar-thumb {
    /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
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
						<a class="nav-link " href="../galleries/index.php"> + Gallery</a>
					</li> 
					<li class="nav-item">
						<a class="nav-link active" href="../categories/index.php"> + Services</a>
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

<section>
  <!--for demo wrap-->
  <h1 style="color: #7c1212;font-size: 25px;">Services   	<button class="btn btn-success btn-sm" style="float: right;margin-top: -6px; margin-right: 3px;">	<a style="float: right;margin: 2px;color: white;padding: 2px;text-decoration: none;" href="new.php" class="upload-image">+ Add Service</a></button></h1>
  <?php
   echo "<table class='table  table-bordered table-hover'>";
    echo "  <thead style='background:#f5f5f5;'>";
       echo " <tr>";
          echo "<th>Name</th>";
          echo "<th>Description</th>";
          echo "<th>Image</th>";
          echo "<th>Action</th>";
        echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
			while ($row = mysqli_fetch_array($categories)) {
				echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['description']."</td>";
					echo "<td><img src='/uploads/".$row['image']."' width='50' height='50'/></td>";

					echo "<td>";
					echo "<a href='edit.php?id=".$row['cid']."'>Edit</a>";
					echo " | ";
					echo "<a href='delete.php?id=".$row['cid']."' data-confirm='Are you sure you want to delete this category?'>Delete</a>";
					echo "</td>";
				echo "</tr>";
			}
      echo "</tbody>";
    echo "</table>";
  ?>
</section>



</body>
</html>