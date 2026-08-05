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
// The output message
$msg = '';
if(isset($_GET['id'])){
    $e_id=$_GET['id'];
    $record = mysqli_query($db, "SELECT * FROM images WHERE id=$e_id");
    $n = mysqli_fetch_array($record);
    $title = $n['title'];
    $description = $n['description'];
    $path = $n['path'];
    $ca_id = $n['id'];
    $category_id = $n['category_name'];
}      
if(isset($_POST['submit'])){    
    // The folder where the images will be stored
   
    if (isset($_FILES['image']['tmp_name'])) {
        $file=$_FILES['image']['tmp_name'];
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
        $target_dir = '/home/wb3gpmj4ae5n/public_html/uploads/';
// The path of the new uploaded image
        $image_path = $target_dir . basename($_FILES['image']['name']);
    }
     $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $trn_date = date("Y-m-d H:i:s");
    // $gallerysImage = '/Applications/MAMP/htdocs/cleaningcompany/uploads/'.$n['path']; 
    // unlink($gallerysImage);
    if (empty($_FILES['image']['tmp_name']))
    {
      $n_path = $n['path'];
  }else{
            $n_path = $_FILES['image']['name'];

    }
    $update="update `images` set `user_id`='".$_SESSION['user']['id']."',`title`='".$title."', `category_name`='".$category."', `path`='".$n_path."', `description`='".$description."', `uploaded_date`='".$trn_date."' where `id`='".$e_id."' ";
    if (mysqli_query($db, $update)) {
        $last_id = mysqli_insert_id($db);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        header("location: index.php");
        echo "Image updated successfully.";
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
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="content upload content home">
                          <p><center>Edit Gallery</center> </p>
                <p><?=$msg?></p>

<form method="post" enctype="multipart/form-data" style="padding: 10px;">
    <table>
        <!-- <tr>

            <td class="gallery-title">Title:</td>
            <td><input type="text" name="title" value="<?php# echo $title ?>"/></td>
        </tr>
        <tr>
            <td class="gallery-title">Description:</td>
            <td><input type="text" name="description" value="<?#php echo $description ?>"/></td>
        </tr> -->
<tr>
       <td class="gallery-title">Service:</td>
   <td>  <?php

            $selection=mysqli_query($db, "select * from categories");
            echo '<select name="category" class="category-select">
            <option >Select Service</option>';

            foreach($selection as $selection){
                $selected=($category_id == $selection['cid'])? "selected" : "";
                echo '<option '.$selected.' value="'.$selection['cid'].'">'.$selection['name'].'</option>';
                // echo  '<option value="'.$selection['cid'].'" ';

            }

            echo '</select>';
            ?><br/>
        </td>
        </tr>        <br/>

        <tr>
            <td class="gallery-title">Image:</td>
            <td><input type="file" name="image" / accept="image/png, image/jpeg, image/jpg" value="/uploads/<?php echo $path ?>"></td>
            <tr>
                <td class="gallery-title">Image Preview:</td>
                <td><img src="/uploads/<?php echo $path ?>" width="50" height="50"/></td>
            </tr>


        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="submit" /></td>
        </tr>
    </table>
</form>

