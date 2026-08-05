<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../../functions.php');

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

if(isset($_GET['id'])){
$id=$_GET['id'];
$record = mysqli_query($db, "SELECT * FROM images WHERE id=$id");
$n = mysqli_fetch_array($record);
$gallerysImage = '/uploads/'.$n['path']; 
unlink($gallerysImage);
$query = "DELETE FROM images WHERE id=$id"; 
$result = mysqli_query($db,$query);

header("Location: index.php"); 
}
?>