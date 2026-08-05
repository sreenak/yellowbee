<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../../functions.php');

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../yb_login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../yb_login.php");
}

if(isset($_GET['id'])){
    $e_id=$_GET['id'];
    $record = mysqli_query($db, "SELECT * FROM categories WHERE cid=$e_id");
    $n = mysqli_fetch_array($record);
    $ca_id = $n['cid'];
    $name = $n['name'];
    $description = $n['description'];
    $path = $n['image'];
}      

// The output message
$msg = '';
// Check if user has uploaded new image
if(isset($_POST['submit'])){    
    if (isset($_FILES['image']['tmp_name'])) {
        $file=$_FILES['image']['tmp_name'];
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
$target_dir = '/home/wb3gpmj4ae5n/public_html/uploads/';
           // The path of the new uploaded image
        $image_path = $target_dir . basename($_FILES['image']['name']);
    }
    if (empty($_POST["name"])) {
      $msg = "Name is required";
  } else {
      $name = mysqli_real_escape_string($db, $_POST["name"]);
  }
	// The folder where the images will be stored
  $trn_date = date("Y-m-d H:i:s");
  $description = mysqli_real_escape_string($db, $_POST['description']);

  if (empty($_FILES['image']['tmp_name']))
  {
     $n_path = $n['image'];
 }else{
           // $gallerysImage = '/Applications/MAMP/htdocs/yellowbee/uploads/'.$n['path'];
           // unlink($gallerysImage);
     $n_path = $_FILES['image']['name'];
 }
    // The path of the new uploaded image
	// Check to make sure the image is valid
 if (!empty($_POST['name'])) {
     $update="update `categories` set `name`='".$name."', `description`='".$description."', `parent`='0', `added_date`='".$trn_date."', `image`='".$n_path."' where `cid`='".$ca_id."' ";
			// update image info into the database (title, description, and date added) 
     if (mysqli_query($db, $update)) {
        $last_id = mysqli_insert_id($db);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        echo "Category updated successfully.";
        header("location: index.php");
    } else {
        echo "Error:" . mysqli_error($db);
    }
    mysqli_close($db);
}
} else {
		// $msg = 'Below added service will dispaly on services page of Yellowbee website!';
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
                <!--    <a class="nav-link" href="../users/add.php"> + Add user</a>      </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="../galleries/index.php"> + Gallery</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" href="../categories/index.php"> + Services</a>
                    </li>  
                </ul>
            </div> 
            <div class="col-md-3 collapse navbar-collapse" id="collapsibleNavbar"  style="width: auto;" >
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
            <div class="row" style="width: 100%;background-color: #f7f7c0;height: 90vh;">
                <div class="col-sm-12">
                    <div class="content upload content home">
                      
                      <p><?php echo $msg ?></p>
                      <form method="post" style="padding: 5px;" enctype="multipart/form-data" ><h2 style="padding-top: 0px;"><center><B>Edit Service</B> </center>
                      </h2>
                         <label for="name">Name</label>
                         <input type="text" name="name" value="<?php echo $name ?>"/>
                         <label for="name">Description:</label>
                         <textarea rows="3" cols="50"  name="description" ><?php echo $description ?>
                     </textarea>
                     <span class="label-input100"><b>Add Main Image</b></span>
                     <td><input type="file" name="image"  accept="image/png, image/jpeg, image/jpg" value="/uploads/<?php echo $path ?>"><img src="/uploads/<?php echo $path ?>" width="50" height="50"/></td>        			
                     <input type="submit" class="btn btn-success"  value="submit" name="submit">
                 </form>
             </div>
         </div>
     </div>
 </body>
 </html>