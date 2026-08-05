<?php 
include('../functions.php');


if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../yb_login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: ../yb_login.php");
}
// display errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
// display errors ends
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_yellow_bee.png">

  <title>Yellow Bee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/admin.css" rel="stylesheet" type="text/css">

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
    <img  src="../images/yellow_bee_logo.png" alt="Yellow bee logo" style="width:150px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-md-8 collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../" target="_blank">View Website</a>
        </li>
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link" href="users/add.php"> + Add user</a>      </li>-->
          <li class="nav-item">
            <a class="nav-link" href="galleries/index.php"> + Gallery</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="categories/index.php"> + Services</a>
          </li>  

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
                <a class="nav-link" href="./home.php?logout='1'" style="color: red;">Logout</a>
              </li>
            </ul>
          </div> 


        </ul>
      </div> 

    </nav>

    <div class="container-fluid" style="margin-top:30px">

      <!-- test -->

      <div class="app-main__inner">

        <div class="row">

                                    <div class="col-md-12 col-lg-6">
                                      <div class="mb-3 card">
                                        <div class="card-header-tab card-header">
                                          <div class="card-header-title">
                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i><h4 style="color: green">
                                              <a  style="color: green;font-size: 22px"href="categories/index.php">Services</a><?php   
                                              $stmt = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date DESC");
                                              $rowcount = mysqli_num_rows($stmt);
                                              echo '('.$rowcount.')'; ?> &emsp; <a style="float: right;margin: 2px;" href="categories/new.php" class="upload-image ">+ Add service</a></h4>
                                            </div>
                                            <div class="btn-actions-pane-right">

                                            </div>
                                          </div>
                                          <div class="tab-content">
                                            <div class="tab-pane fade active show" id="tab-eg-55">
                                              <div class="widget-chart p-3">
                                                <div style="height: 200px">


                                                  <div class="col-md-12 col-lg-12">
                                                    <ul class="project-col-3 isotope" id="isotope">
                                                      <?php $categories = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date ASC");
                                                      while ($row = mysqli_fetch_array($categories)) {
                                                        echo '<li class="" data-aos="fade-left" style="margin:1%;float:left;width:31%;list-style:none;">';
                                                        echo '<div class="project-item" style=" height:150px">';
                                                        echo '<div class="about-block clearfix img-scale">';
                                                        echo '<figure>'; 
                                                        echo '<a href="#">';
                                                        echo '<img class="img-responsive ser-img-size" width="80px" height="70px" src="/uploads/'.$row['image'].'" alt="Photo"></a>';
                                                        echo '</figure>';
                                                        echo '<div class="text-box mt-25">';
                                                        echo '<div class="box-title mb-15">';
                                                        echo '<p><a style="color:black;font-size:10px" href="#">'.strtoupper($row['name']).'</a></p>';
                                                        echo '</div>';
                                                        echo '</div>';
                                                        echo '</div>';
                                                        echo '</div>';
                                                        echo ' </li>';
                                                      }  
                                                      ?> 
                                                    </ul>
                                                  </div>

                                                </div>
                                                
                                              </div>

                                            </div>
                                          </div>
                                        </div>
                                      </div>



 <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
              <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                  <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                  <h4 style="color: green"> <a  style="color: green;font-size: 22px"href="galleries/index.php">  Gallery</a><?php   
                  $stmt = mysqli_query($db, "SELECT * FROM images ORDER BY uploaded_date DESC");
                  $rowcount = mysqli_num_rows($stmt);
                  echo '('.$rowcount.')'; ?> &emsp; <a style="float: right;margin: 2px;" href="categories/new.php" class="upload-image ">+ Add Gallery</a></</h4>
                </div>
                <ul class="nav">
                                            <!-- 
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li> -->
                                          </ul>
                                        </div>
                                          <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                              <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                  <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                    <div class=" row images">
                                                      <?php
                                                      $stmt = mysqli_query($db, "SELECT * FROM images ORDER BY uploaded_date DESC");
$images = $stmt;
          echo '<div class="msg">';
          echo '</div>';
          
          
          while ($row = mysqli_fetch_array($images)) {
                       $category =  mysqli_query($db, "SELECT * FROM categories where cid='".$row['category_name']."' ");
                        $category = mysqli_fetch_array($category);

            echo "<div class='col-md-3' style='margin:1%;float:left;width:31%;'>";
            echo "<a href='#' style='width:100px;height:70px;'>";
            echo "<img src='/uploads/".$row['path']."' width='80' height='70' class='photo-frame'>";
            echo "</a>";
            echo "<p style='margin:0px;'>".$category['name']."</p>";
            echo "</p>";
            echo "</div>";

          }
          

          ?>
        
                                                      
                                                  </div>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>



                                    </div>

                                  </div>


                                  <div class="row mt-5" style="background: grey;padding:2px;margin-top: 0rem!important;">
                                    <div class="col-md-12 text-center">
                                      <p class="copyright">
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                                      </p>
                                    </div>
                                  </div>
                                </body>
                                </html><!-- test end -->

                              </body>
                              </html>








