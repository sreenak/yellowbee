
<?php 

require('db.php');
// Connect to MySQL
// MySQL query that selects all the images
include('header.php')

?>
  <!-- #region Jssor Slider Begin -->
  <!-- Generator: Jssor Slider Composer -->
  <!-- Source: https://www.jssor.com/demos/image-gallery-with-vertical-thumbnail.slider/=edit -->
  <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.jssor_1_slider_init = function() {

      var jssor_1_SlideshowTransitions = [
      {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
      {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
      {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InQuint,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
      {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
      {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
      {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
      {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
      {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
      {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
      {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
      {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
      ];

      var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
          $Class: $JssorSlideshowRunner$,
          $Transitions: jssor_1_SlideshowTransitions,
          $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
          $Class: $JssorThumbnailNavigator$,
          $Rows: 2,
          $SpacingX: 14,
          $SpacingY: 12,
          $Orientation: 2,
          $Align: 156
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/

      var MAX_WIDTH = 960;

      function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

          var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

          jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
          window.setTimeout(ScaleSlider, 30);
        }
      }

      ScaleSlider();

      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
    };
  </script>
  <style>
  /*jssor slider loading skin spin css*/
  .jssorl-009-spin img {
    animation-name: jssorl-009-spin;
    animation-duration: 1.6s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
  }

  @keyframes jssorl-009-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  /*jssor slider arrow skin 093 css*/
  .jssora093 {display:block;position:absolute;cursor:pointer;}
  .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
  .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
  .jssora093:hover {opacity:.8;}
  .jssora093.jssora093dn {opacity:.6;}
  .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

  /*jssor slider thumbnail skin 101 css*/
  .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
  .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
  .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
  .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
  .jssort101 .p:hover{padding:2px;}
  .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
  .jssort101 .p:hover.pdn{padding:0;}
  .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
  .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
  .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
  .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
  .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}


  /*///*/


/* ==============================
 20. Side Bar Widget styles
 ============================== */
 #services-section .text-box .box-title h3{
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  font-size:15px; 
}
#services-section ul li .project-item .about-block img{
  width: 100%;
}

#services-section .text-box .box-title h3 a:hover{
  color: #2196f3;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .text-box-2 .box-title h3{
    font-size: 14px;
  }

  #blog .padding-20 {
    padding:8px;
  }

  
}
.single-sidebar-widget ul {
  list-style: none;
  padding-left: 0;
}
.single-sidebar-widget {
  margin-bottom: 50px;
}
.single-sidebar-widget:last-child {
  margin-bottom: 0;
}
.single-sidebar-widget .sec-title {
  margin-bottom: 30px;
}
.single-sidebar-widget .sec-title h2 {
  font-size: 20px;
  font-family: 'Oswald', sans-serif;
}
.single-sidebar-widget .sec-title {
  font-size: 15px;
  font-weight: 600;
}
.single-sidebar-widget .sec-title h2:after {
  width: 25px;
}
.single-sidebar-widget .contact-form input, .single-sidebar-widget .contact-form .select-menu + .ui-selectmenu-button {
  height: 30px;
}
.single-sidebar-widget .contact-form .select-menu + .ui-selectmenu-button {
  margin-bottom: 2px;
}
.single-sidebar-widget .contact-form .select-menu + .ui-selectmenu-button .ui-selectmenu-text {
  line-height: 40px;
}
.single-sidebar-widget .dwnld-broucher a {
  text-transform: uppercase;
  color: #08ADD0;
  font-weight: 600;
  margin-top: 30px;
  font-size: 12px;
  display: inline-block;
}
.single-sidebar-widget .special-links li:last-child {
  margin-bottom: 0;
}
.single-sidebar-widget .special-links li a {
  background: #f9f9f9;
  color: #323232;
  border: 1px solid #e9e9e9;
  font-weight: 600;
  text-transform: uppercase;
  display: block;
  margin-bottom: 5px;
  line-height: 41px;
  position: relative;
  padding: 0 20px;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  position: relative;
}
.single-sidebar-widget .special-links li:hover a:after, .single-sidebar-widget .special-links li.active a:after {
  color: inherit;
}
.single-sidebar-widget .special-links li a:after {
  content: '\f101';
  font-family: 'FontAwesome';
  position: absolute;
  top: 0;
  right: 20px;
  line-height: 41px;
  color: #6A6969;
  font-weight: normal;
}
.single-sidebar-widget .special-links li a:before {
  content: '\f0da';
  font-family: 'FontAwesome';
  position: absolute;
  top: 0;
  left: -1px;
  color: #2196f3;
  font-size: 0px;
  line-height: 41px;
  opacity: 0;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  border-left: 4px solid #2196f3;
}
.single-sidebar-widget .special-links li:hover a, .single-sidebar-widget .special-links li a.active {
  background: #fff;
  color: #2196f3;
}
.single-sidebar-widget .special-links li a.active:after {
  color: #2196f3;
}
.single-sidebar-widget .special-links li a:hover:before, .single-sidebar-widget .special-links li a.active:before {
  opacity: 1;
}
.search-box placeholder {
  color: #000;
}
.single-sidebar-widget .search-box form {
  background: #e5e5e5;
  width: 100%;
  height: 48px;
  border: 1px solid #e9e9e9;
}
.single-sidebar-widget .search-box form input {
  padding-left: 30px;
  border: none;
  outline: none;
  height: 100%;
  color: rgba(255, 255, 255, 0.5);
  width: calc(100% - 55px);
  background-color: transparent;
}
.single-sidebar-widget .search-box form input::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: rgba(255, 255, 255, 0.5);
  opacity: 1;
}
.single-sidebar-widget .search-box form input:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: rgba(255, 255, 255, 0.5);
  opacity: 1;
}
.single-sidebar-widget .search-box form input::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: rgba(255, 255, 255, 0.5);
  opacity: 1;
}
.single-sidebar-widget .search-box form input:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: rgba(255, 255, 255, 0.5);
}
.single-sidebar-widget .search-box form input:placeholder-shown {
  /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
  color: rgba(186, 185, 185, 1);
}
.single-sidebar-widget .search-box form button {
  position: relative;
  left: 2px;
  width: 50px;
  background: #2196f3;
  color: #000000;
  font-size: 16px;
  padding: 11px 0px;
  border: none;
  outline: none;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.single-sidebar-widget .search-box form button:hover {
  background: #1FB5C7;
}
.single-sidebar-widget .search-box form button:hover i {
  color: #fff;
}
.single-sidebar-widget .search-box form button:hover:after {
  background: #1FB5C7;
}
.single-sidebar-widget .search-box form button i {
  position: relative;
  z-index: 2;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.single-sidebar-widget .categories ul li:last-child a {
  border: none;
}
.single-sidebar-widget .categories ul li a {
  color: #898989;
  text-transform: capitalize;
  line-height: 42px;
  display: block;
  border-bottom: 1px solid #E6E6E6;
  position: relative;
}
.single-sidebar-widget .categories ul li a:after {
  content: '\f105';
  font-family: 'FontAwesome';
  color: #C8C8C8;
  position: absolute;
  top: 0;
  right: 0;
}
.single-sidebar-widget .popular-post .img-cap-effect .img-box .img-caption:before {
  border-width: 2px;
}
.single-sidebar-widget .popular-post li {
  margin-bottom: 30px;
}
.single-sidebar-widget .popular-post li:last-child {
  margin-bottom: 0;
}
.single-sidebar-widget .popular-post .img-box, .single-sidebar-widget .popular-post .content {
  display: table-cell;
  vertical-align: middle;
}
.single-sidebar-widget .popular-post .img-box {
  width: 110px;
}
.single-sidebar-widget .popular-post .content {
  padding-left: 30px;
}
.single-sidebar-widget .popular-post .content a h4 {
  font-family: 'Open Sans', sans-serif;
  color: #242424;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.single-sidebar-widget .popular-post .content a h4:hover {
  color: #1FB5C7;
}
.single-sidebar-widget .popular-post .content p {
  color: #8E8D8D;
  font-size: 13px;
  line-height: 20px;
  margin: 0;
}
.single-sidebar-widget .popular-post .content span {
  color: #1CBAC8;
  font-size: 13px;
  display: block;
  margin-top: 4px;
  font-weight: 500;
}
.single-sidebar-widget .text-box p {
  color: #8E8D8D;
}
.single-sidebar-widget .insta-feed ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row wrap;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.single-sidebar-widget .insta-feed ul .img-cap-effect .img-box .img-caption:before {
  border-width: 2px;
}
.single-sidebar-widget .insta-feed {
  font-size: 0;
  display: inline-block;
}
.single-sidebar-widget .insta-feed img {
  max-width: 100%;
  display: inline-block;
  font-size: 0;
  margin-bottom: 1px;
  margin-right: 1px;
}
.single-sidebar-widget .tag-cloud {
  font-size: 0;
  margin-left: -5px;
  margin-right: -5px;
}
.single-sidebar-widget .tag-cloud li {
  display: inline-block;
}
.single-sidebar-widget .tag-cloud li a {
  display: block;
  color: #787878;
  text-transform: uppercase;
  border: 1px solid #EAEAEA;
  border-radius: 20px;
  padding: 7px 22px;
  font-size: 12px;
  margin: 0 5px;
  margin-bottom: 10px;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.single-sidebar-widget .tag-cloud li a:hover {
  background: #E5E5E5;
  color: #787878;
  border-color: #E5E5E5;
}
.single-client-box {
  margin-bottom: 50px;
}
.single-client-box:last-child {
  margin-bottom: 0;
}
.single-client-box .icon-box, .single-client-box .content {
  display: table-cell;
  vertical-align: middle;
}
.single-client-box .icon-box {
  width: 170px;
  text-align: center;
  border-top: 4px solid #1FB5C7;
  border-left: 1px solid #E9E9E9;
  border-bottom: 1px solid #E9E9E9;
}
.single-client-box .content {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-right: 30px;
  padding-left: 30px;
  border-right: 1px solid #E9E9E9;
  border-bottom: 1px solid #E9E9E9;
  border-top: 1px solid #E9E9E9;
}
.single-client-box .content h3 {
  font-size: 18px;
  font-weight: bold;
  font-family: 'Alegreya', sans-serif;
  color: #242424;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.single-client-box .content p {
  color: #898989;
  margin: 0;
}
.single-sidebar-widget ul.brochure-btns li a {
  font-family: 'Open Sans', sans-serif;
  color: #404040;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 14px;
  display: block;
  background: #FBFBFB;
  border: 1px solid #EDEDED;
  padding: 12px 20px;
}
.single-sidebar-widget ul.brochure-btns li {
  display: block;
  margin-bottom: 21px;
}
.single-sidebar-widget ul.brochure-btns li a i {
  color: #e94429;
  margin: 0 10px 0;
  font-size: 1.2em;
}
a.cbtn{
  font-size: 13px;
}
a.active.cbtn{
  background: #f5f5f5 !important;
  font-size: 13px;

}
/* Add padding BETWEEN each column */




</style>

<?php  $categories = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date DESC" ); ?>
    <section class="inner-intro gbg-img light-color overlay-intro">
        <div class="container-fluid">
          <div class="row title">
            <h1 style="margin: 205px 0 0 50px; ">Gallery
            <div class="page-breadcrumb">
              <a style="color:white; font-size: 16px"> &nbsp;&nbsp;Home</a>  <span  style="font-size: 16px; color:grey"> /</a>  <span class="white" style="font-size: 16px">Gallery</span>
            </div>
            </h1>
          </div>
        </div>
      </section>
<section class="ftco-section" style="padding: 2em 0;">
  <div class="container">
   <div class="row justify-content-center pb-5 mb-3">
    <div class="col-md-12 heading-section  text-center ftco-animate">
     <!-- <span class="subheading"></span> -->
     <!-- <h2>Our Gallery</h2><br/> -->
     <p>Here are a few pictures of our past projects. While this is not everything that we have done, it does show the level of our quality and dedication. We clean your homes and businesses as if they were ours.</p>
   </div>
 </div>
 <div class="row">

  <div class="col-lg-4 col-md-4">
   <div class="single-sidebar-widget">
     <div class="special-links">
      <div id="myBtnContainer" >
        <ul>
            <li class="ftco-animate">
            <form action="gallery" method="POST" id="allimagesform">
            <input type="hidden" value="all" name="all" id="all">
            <a class="cbtn menu-click active" onclick="filterallImage('all')"> all services
            </a>
          </form>
          </li>
          <?php while ($cat = mysqli_fetch_array($categories)) {
            echo '<form action="gallery" method="POST" id="myform'.$cat["cid"].'">';
            echo  '<input type="hidden" value="'.$cat["cid"].'" name="cat_id" id="cat_id">';
            echo '<li class="ftco-animate">';
            echo '<a class="cbtn menu-click"  onclick="filterImage('.$cat["cid"].')"> '.$cat["name"].'';
            echo "</a>";
            echo '</li>';
            echo '</form>';
          } ?>
        
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-8 col-md-7">
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
      <?php  $categories = mysqli_query($db, "SELECT * FROM categories ORDER BY added_date DESC" ); 

      if(isset($_POST['cat_id'])) //filter case based on category
      {
        $cat_filter = $_POST['cat_id'];
        $images = mysqli_query($db, "SELECT * FROM images where category_name ='".$cat_filter."' ORDER BY uploaded_date DESC" );
        while ($row = mysqli_fetch_array($images)) {
         echo '<div>';
         echo '<img data-u="image" onclick="onClick(this)" src="uploads/'.$row[path].'" />';
         echo '<img data-u="thumb" src="uploads/'.$row[path].'" />';
         echo '</div>';
       }
     // Do your query against the course id.
     }else if(isset($_POST['all'])) //filter case based on category
      {
      while ($cat = mysqli_fetch_array($categories)) {
        $images = mysqli_query($db, "SELECT * FROM images where category_name ='".$cat['cid']."' ORDER BY uploaded_date DESC" );
        while ($row = mysqli_fetch_array($images)) {
         echo '<div>';
         echo '<img data-u="image" onclick="onClick(this)" src="uploads/'.$row[path].'" />';
         echo '<img data-u="thumb" src="uploads/'.$row[path].'" />';
         echo '</div>';
       }
     }
   }else{
       while ($cat = mysqli_fetch_array($categories)) {
        $cat_filter = $cat['cid'];
        $images = mysqli_query($db, "SELECT * FROM images where category_name ='".$cat_filter."' ORDER BY uploaded_date DESC" );
        while ($row = mysqli_fetch_array($images)) {
         echo '<div>';
         echo '<img data-u="image" onclick="onClick(this)" src="uploads/'.$row[path].'" />';
         echo '<img data-u="thumb" src="uploads/'.$row[path].'" />';
         echo '</div>';
       }
     }
   }
   ?>

 </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation composer</a>
 <!-- Thumbnail Navigator -->
 <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
  <div data-u="slides">
    <div data-u="prototype" class="p" style="width:99px;height:66px;">
      <div data-u="thumbnailtemplate" class="t"></div>
      <svg viewbox="0 0 16000 16000" class="cv">
        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
      </svg>
    </div>
  </div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
  </svg>
</div>
<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
  </svg>
</div>
</div>

</div><!-- column closes -->
</div>
</div>
</section>


<section>
  <div class="container">
    <h4 class="hideme"><b>We Works with Clients on Strategy
</b></h4>
  <p data-aos="fade-up-left">We clean it all: office buildings, financial institutions, medical facilities, retail stores, manufacturing facilities, universities, Restaurants, and any other commercial property that you need professionally maintained. Our commercial cleaning services allow organizations to deliver a superior customer experience, extend the useful lives of their assets, and provide employees with a superior work environment. With Yellow Bee's Cleaning Services, your lobbies, restrooms, kitchen, hallways, break rooms, and desks will look their best. Your floors will shine, and your upholstery will last longer.</p>
</div>
</section>
<script type="text/javascript">jssor_1_slider_init();
</script>
<!-- #endregion Jssor Slider End -->

<script>

  function filterImage(c) {
    document.getElementById('myform'+c).submit();

  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
  }

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("cbtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<?php include('footer.php') ?>

