<?php include('header.php'); 
error_reporting(E_ALL);
ini_set('display_errors', '1');
$service = $_GET['service'];
require('db.php');

?>
<style type="text/css">

span.srvcno {
    top: 14px;
    font-size: 60px;
    position: absolute;
    left: 65px;
}
.carousel{
  top:17px;
}
.service_details_image {
    height: 469px !important;
    }
.kc-css-system .kc-css-645699 {
    padding-top: 40px;
    padding-bottom: 35px;
}
img.butomarr1 {
    position: relative;
    left: 92%;
        }
    .kc_title, .kc_title_link {
    color: #005096;
    font-size: 17px;
    margin-top: 19px;
    margin-left: 105px;
}
.kc_single_image img {
    max-width: 100%;
    display: inline-block;
}
img.toparra2 {
    position: relative;
    left: 88%;
    }
.kc_single_image img {
    max-width: 100%;
    display: inline-block;
}
img.butomarr {
    position: relative;
    left: 97%;
}
.kc_column, .kc_column_inner {
    min-height: 1px;
    position: relative;
    padding-right: 15px;
    padding-left: 15px;
    }
    .kc-col-container, .kc-container, .kc-elm {
    box-sizing: border-box;
}
.kc-title-wrap {
    width: 100%;
}
.kc_column, .kc_column_inner {
    min-height: 1px;
    position: relative;
    padding-right: 15px;
    padding-left: 15px;
}
.kc_single_image, .kc_single_image figure {
     position: relative; 
}
.kc-elm {
    /*float: left;*/
     width: 100%; 
}
div.kc_col-of-5{
        width: 25%;
    float: left;
}
@media only screen and (max-width: 5000px) and (min-width: 1000px){
.kc-css-system .kc-css-371307 {
    width: 7%;
}
}
@media screen and (max-width: 678px){
div.kc_col-of-5{
        width: 100%;
    float: left;
}
.kc_single_image{
    display: none;
}
span.srvcno{
    left:50px;
}
}
@media only screen and (max-width: 992px) {
div.kc_col-of-5{
        width: 100%;
    float: left;
}
.kc_single_image{
    display: none;
}
span.srvcno{
    left:50px;
}
}
.kc_title1{
    padding: 10px;
    font-size: 22px;
    font-weight: 700;
    margin-left: 57px;
}
.hidediv{
    display: none;
}
.showdiv{
    display: block;
}
</style>
<section class="inner-intro single-service-bg-img">
  <div class="container">
    <div class="row title">
      <br/>
      <h1 style="color:white"><center>Service Details</center></h1><br/>
    
    </div>
  </div>
</section>

<div class="service_page_section pst_toppadder20 ">
   
    <div class="container">
<h1 style="font-size: 20px"><u><b><?php
         $images = mysqli_query($db, "SELECT name FROM categories WHERE  name  = '".$service."' ORDER BY added_date DESC");
                 $image = $images -> fetch_assoc();
                  echo $image['name']; ?></b></u></h1>
        <div class="row">
          
            <div class="col-lg-8 col-md-8 col-sm-12 col-12" style="margin-bottom: 10px">
                <div class="service_slider_wrapper">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                 <?php 
                 $category = mysqli_query($db, "SELECT cid FROM categories WHERE name like '".$service."' ORDER BY added_date DESC");
                 $record = $category -> fetch_assoc();
                 $services = mysqli_query($db, "SELECT * FROM images where category_name = '".$record['cid']."' ORDER BY uploaded_date DESC" );
                 $count = 0;
                 $active = "";
                 while ($row = mysqli_fetch_array($services)) {
                    if ($count=="0") { $active = 'active'; }else{
                        $active = 'not-active';
                    }
                     echo '<div class="carousel-item '.$active.'">'; 
                     echo '<img class="d-block w-100 service_details_image" src="/uploads/'.$row['path'].'" alt="First slide">';
                     echo '</div>';
                     $count++;
                 }
                 ?>
             </div>
             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- </div> -->
<div class="col-lg-4 col-md-4 col-sm-12 col-12">

<div class="fusion-content-boxes content-boxes columns fusion-columns-1 fusion-columns-total-3 fusion-content-boxes-1 content-boxes-icon-on-top row content-left" data-animationoffset="100%" style="background: #ffd700;margin:15px;"><style type="text/css" scoped="scoped">.fusion-content-boxes-1 .heading strong{color:#0ca9bb;}
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading strong,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .heading-link strong,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading strong,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .heading-link strong,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::after,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover.link-area-box .fusion-read-more::before,
      .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover:after,
      .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover:before,
      .fusion-content-boxes-1 .fusion-content-box-hover .fusion-read-more:hover,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::after,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover.link-area-box .fusion-read-more::before,     
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .icon .circle-no,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .icon .circle-no {
        color: #0ca9bb !important;
      }
      .fusion-content-boxes-1 .fusion-content-box-hover .heading-link:hover .icon i.circle-yes,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box:hover .heading-link .icon i.circle-yes,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon i.circle-yes,
      .fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .icon i.circle-yes {
        background-color: transparent !important;
        border-color: #0ca9bb !important;
      }</style><div class="fusion-column content-box-column content-box-column-1 col-lg-12 col-md-12 col-sm-12 fusion-content-box-hover content-box-column-last-in-row"><div class="col content-wrapper link-area-box icon-hover-animation-none" style="background-color:transparent;"><div class="heading heading-with-icon icon-left"><div class="icon"><center><i style="    margin-left: 116%;background-color:transparent;border-color:transparent;height:auto;width:40px;line-height:normal;color:#0ca9bb;font-size:40px;" class="fa fontawesome-icon fa-users circle-no"></i></center></div><br/><strong class="content-box-heading" style="font-size: 18px;line-height:23px;"><center>SIMILAR SERVICES</center></strong></div><div class="fusion-clearfix"></div><div class="content-container"></div></div></div><div class="fusion-clearfix"></div><div class="fusion-column content-box-column content-box-column-2 col-lg-12 col-md-12 col-sm-12 fusion-content-box-hover content-box-column-last-in-row"><div class="col content-wrapper link-area-box icon-hover-animation-none" style="background-color:transparent;">
          <?php $categories = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date ASC");
          while ($row = mysqli_fetch_array($categories)) {
            echo '<div class="fusion-clearfix"></div><div class="content-container">
<p style="text-align: center;">';
            echo '<a style="text-decoration: underline; font-size:13px;" href="service-details.php?service='.$row['name'].'">'.strtoupper($row['name']).'</a>';
                   echo '</p>';
                   echo '</div>';
          }?>
</div>
</div>
</div>
</div>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="serv_page_txt">
<?php
         $images = mysqli_query($db, "SELECT name FROM categories WHERE  name  = '".$service."' ORDER BY added_date DESC");
                 $image = $images -> fetch_assoc();
                ?>
        <p class="pst_toppadder30">
           <?php 
                 $category = mysqli_query($db, "SELECT description FROM categories WHERE name like '".$service."' ORDER BY added_date DESC");
                 $record = $category -> fetch_assoc();
                 echo $record['description'];?>
        </p>
    </div>
</div>





</div>
<?php 
if ($service == "Carpet Shampoo Washing"){
    $hidemydiv = "showdiv";
}else{
    $hidemydiv ="hidediv";
    }
 ?>
<section class="kc-elm kc-css-432472 kc_row <?php echo $hidemydiv ?>"><div class="kc-row-container  kc-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-451083 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container">
<div class="kc-elm kc-css-620449 kc-title-wrap ">

    <h1 class="kc_title1">4 simple steps to get carpet and upholstery cleaning in Qatar</h1>
</div>
<div class="kc-elm kc-css-645699 kc_row kc_row_inner"><div class="kc-elm kc-css-501590 kc_col-of-5 kc_column_inner kc_col-of-5"><div class="kc_wrapper kc-col-inner-container">
<div class="kc-elm kc-css-432508 kc-title-wrap ">

    <h1 class="kc_title"><span class="srvcno">1.</span> Book a clean either by email or phone for a time that suits you</h1>
</div>
<div class="kc-elm kc-css-933894 kc_shortcode kc_single_image">

        <img src="https://skylitecleaning.co.uk/wp-content/uploads/2020/06/arroww.png" class="butomarr1" alt="">    </div>
</div></div><div class="kc-elm kc-css-371307 kc_col-sm-1 kc_column_inner kc_col-sm-1"><div class="kc_wrapper kc-col-inner-container"></div></div><div class="kc-elm kc-css-119332 kc_col-of-5 kc_column_inner kc_col-of-5"><div class="kc_wrapper kc-col-inner-container"><div class="kc-elm kc-css-226814 kc_shortcode kc_single_image">

        <img src="https://skylitecleaning.co.uk/wp-content/uploads/2020/06/top-arrw.png" class="toparra2" alt="">    </div>

<div class="kc-elm kc-css-976358 kc-title-wrap ">

    <h1 class="kc_title"><span class="srvcno">2.</span> We will send a fully insured &amp; equipped technician</h1>
</div>
</div></div><div class="kc-elm kc-css-162199 kc_col-sm-1 kc_column_inner kc_col-sm-1"><div class="kc_wrapper kc-col-inner-container"></div></div><div class="kc-elm kc-css-645767 kc_col-of-5 kc_column_inner kc_col-of-5"><div class="kc_wrapper kc-col-inner-container">
<div class="kc-elm kc-css-770432 kc-title-wrap " >

    <h1 class="kc_title" style=""><span class="srvcno">3.</span>The technician will carefully remove dirt &amp; stubborn stains</h1>
</div>
<div class="kc-elm kc-css-643418 kc_shortcode kc_single_image">

        <img src="https://skylitecleaning.co.uk/wp-content/uploads/2020/06/arroww.png" class="butomarr" alt="">    </div>
</div></div><div class="kc-elm kc-css-284069 kc_col-sm-1 kc_column_inner kc_col-sm-1"><div class="kc_wrapper kc-col-inner-container"></div></div><div class="kc-elm kc-css-847974 kc_col-of-5 kc_column_inner kc_col-of-5"><div class="kc_wrapper kc-col-inner-container">
<div class="kc-elm kc-css-879501 kc-title-wrap ">

    <h1 class="kc_title"><span class="srvcno">4.</span>Relax and let us make your carpet or upholstery shine again</h1>
</div>
</div></div></div></div></div></div></div></section>

</div>
      <img src="images/splash.png" alt="New York" width="100%" >

<?php include('footer.php') ?>


