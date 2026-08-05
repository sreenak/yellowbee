<?php include('header.php'); 
require('db.php');
?>
<section class="inner-intro bg-img light-color overlay-intro">
  <div class="container">
    <div class="row title">
      <br/><br/><br/>
      <br/><br/>   <br/>   <h1>Services</h1>

      <div class="page-breadcrumb"style="margin-top:10px;">
        <a style="color:white;">&nbsp;Home</a> / <span class="white">Services</span>
      </div>
    </div>
  </div>
</section>
<div id="services-section" class=" ptb-xs-60 pst_toppadder20">
  <div class="container cf">
    <h3 style="font-size: 28px;
    padding: 15px 0 15px 0;text-align: center">Our Best Cleaning Services For You</h3>
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <ul class="project-col-3 isotope" id="isotope">
          <?php $categories = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date ASC");
          while ($row = mysqli_fetch_array($categories)) {
            echo '<li class="" data-aos="fade-left">';
            echo '<div class="project-item">';
            echo '<div class="about-block clearfix img-scale">';
            echo '<figure>'; 
            echo '<a href="#">';
            echo '<img class="img-responsive ser-img-size" src="/uploads/'.$row['image'].'" alt="Photo"></a>';
            echo '</figure>';
            echo '<div class="text-box mt-25">';
            echo '<div class="box-title mb-15">';
            echo '<h3><a class="serv-head" href="#">'.$row['name'].'</a></h3>';
            echo '</div>';
            echo '<div class="text-content">';
            echo '<p>'.substr($row['description'], 0, 125).'..</p>';
            echo '<a href="service-details.php?service='.$row['name'].'" class="btn-text">Read More</a>';
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
      <img src="images/splash.png" alt="New York" width="100%" >

</div>

<?php include('footer.php') ?>
 