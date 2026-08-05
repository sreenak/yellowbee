<?php include('../../functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../yb_login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../yb_login.php");
}

// The output message
$msg = '';
// Check if user has uploaded new image
if (isset($_POST['create'])) {
	if (empty($_POST["name"])) {
		$msg = "Name is required";
	} else {
		$name = mysqli_real_escape_string($db, $_POST["name"]);
	}
	// The folder where the images will be stored
    $trn_date = date("Y-m-d H:i:s");
    $description = mysqli_real_escape_string($db, $_POST['description']);
    if (isset($_FILES['image']['tmp_name'])) {
        $file=$_FILES['image']['tmp_name'];
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
        $target_dir = '/home/wb3gpmj4ae5n/public_html/uploads/';
        $n_path = $_FILES['image']['name'];
           // The path of the new uploaded image
        $image_path = $target_dir . basename($_FILES['image']['name']);
    }
    // The path of the new uploaded image
	// Check to make sure the image is valid
    if (!empty($_POST['name'])) {
      $sql = "INSERT into `categories` (`name`, `description`, `parent`, `added_date`,`image`)
      VALUES ('$name', '$description',0, '$trn_date','$n_path' )" ;
			// Insert image info into the database (title, description, image path, and date added) 

      if (mysqli_query($db, $sql)) {
        $last_id = mysqli_insert_id($db);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        echo "Category created successfully.";
        header("location: index.php");

    } else {
        echo "Error:" . mysqli_error($db);
    }
    mysqli_close($db);
}
} else {
		#$msg = 'Category not added!';
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
                <form action="new.php" method="post" class="contact100-form validate-form" enctype="multipart/form-data" style="padding: 10px;">
                    <span class="contact100-form-title">
                        <b>Add Service</b>
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100"><b>Name</b></span>
                        <input class="input100" type="text" name="name" id="name" placeholder="Enter service name">
                        <span class="focus-input100"></span>
                    </div>
                    <span class="label-input100"><b>Description</b></span>
                    <textarea class="input100" style="min-height: 100px;" name="description" placeholder="Enter description..."></textarea>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="focus-input100"></span>
                        <span class="label-input100"><b>Add Main Image</b></span>
                        <input type="file" name="image" / >
                    </div>
                    <input type="submit" class="btn btn-success" value="submit" name="submit">
                </form>
            </div>
        </div>



    </body>
    </html>