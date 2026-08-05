<?php include('header.php') ?>
<style type="text/css">
.working-steps:before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgba(43,197,209,.8);
}
.working-steps{
  background-size: cover!important;
  padding: 15px 0;
  text-align: center;
  background-attachment: fixed!important;
  position: relative;background:url(images/house.jpg)no-repeat;
}
.review_counter{
  background-size: cover!important;
  padding: 100px 0;
  text-align: center;
  background-attachment: fixed!important;
  position: relative;background:url(images/yellowbe_home.jpg)no-repeat;
}
.imageup{
  height: 97px;
    width: 111px;
    margin: -50px 0px 0px 0px;
    border-radius: 50%;
    background: #fff;
    padding: 22px;
    border: 1px solid #ffe52f;
}

.our-qualities{
  min-height: 215px;
 border-radius: 5px !important;
}
.our-qualities:hover {
     box-shadow: 0px 0px 10px #bbb; 
    background: #fff;
    }
.review_counter .counter {
  color: #fff;
  font-weight: 700;
  margin-bottom: 0;
  padding-top: 20px;
  font-size: 35px;
}
.count_header{
  color: #fff;
}

.review_counter:before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgb(28 29 27 / 9%);
}
.slider-button:before {
  background-color: #14287b;
}
.slider-button:before {
  content: "";
  height: 100%;
  width: 0;
  background-color: #14287b;
  border-radius: 4px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  transition: all .5s ease-out;
}
a.slider-button {
  margin-top: 5px;
  border-radius: 4px;
  display: inline-flex;
  padding: 9px 18px;
  font-size: 16px;
  font-weight: 500;
  position: relative;
  line-height: 1.4;
  z-index: 2;
  -webkit-transition: all .5s ease-out;
  -moz-transition: all .5s ease-out;
  -ms-transition: all .5s ease-out;
  -o-transition: all .5s ease-out;
  transition: all .5s ease-out;
}
.slider-button:hover:before {
  width: 100%;
  left: 0;
}
.slider-button:hover {
  color: #fff !important;
  background: blue;
  -webkit-transition: all .5s ease-out;
  -moz-transition: all .5s ease-out;
  -ms-transition: all .5s ease-out;
  -o-transition: all .5s ease-out;
  transition: all .5s ease-out;
}

a.slider-button, .rtin-service2-wrap a.service-button, .call-to-action-content .item-content .action-button {
  background-color: #fef22e;
}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>

  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/arrangement.png" alt="Los Angeles" width="100%"  >
      <div class="carousel-caption  d-md-block">
       <h3 class="courasal-content slider-content" id="slidertest"  data-aos="fade-down-left">A Caring Cleaning Team</h3>
       <h3 class="courasal-content slider-content" id="slidertest"  data-aos="fade-down-left">Your Hygiene Home is Our Responsibility</h3>
       <h3 class="courasal-content-smll slider-content" id="slidertest" data-aos="fade-down-right">Stay Neat & Clean</h3>
     </div>
   </div>
   <div class="carousel-item">
    <img src="images/aranged-room.png" alt="Chicago" width="100%" >
    <div class="carousel-caption d-md-block">
      <h3 class="courasal-content slider-content" id="slidertest" data-aos="fade-down-left">Keep Your Home Corona Free</h3>
      <h3 class="courasal-content slider-content" id="slidertest" data-aos="fade-down-left">Best Sanitization Services</h3> 
      <h3 class="courasal-content-smll slider-content" id="slidertest" data-aos="fade-down-right">Sanitize & Keep Clean</h3>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/image_4.jpg" alt="New York" width="100%" >
    <div class="carousel-caption  d-md-block">
      <h3 class="courasal-content slider-content" id="slidertest" data-aos="fade-down-left">Enjoy a better cleaning experience</h3> 
      <h3 class="courasal-content-smll slider-content" id="slidertest" data-aos="fade-down-left">Make Your World as Clean as Mine</h3>
    </div>
  </div>
  <div class="carousel-item " >
    <img src="images/desktop-cleaning.png" alt="New York" width="100%" >
    <div class="carousel-caption  d-md-block">
      <h3 class="courasal-content slider-content" data-aos="zoom-in">Leave the house cleaning chores to us</h3>
      <h3 class="courasal-content-smll slider-content" data-aos="fade-down-left">Let us do the dirty work, so you don't have to</h3>
    </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>


<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-12">
            <!-- <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
              <form action="#" class="appointment w-100">
                <div class="row justify-content-center">
                  <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-12 col-md d-flex align-items-center">
                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                      <label for="name">Phone number</label>
                      <input type="text" class="form-control" placeholder="Phone number">
                    </div>
                  </div>
                  <div class="col-12 col-md d-flex align-items-center">
                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                      <label for="name">Select Services</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Select Services</option>
                            <option value="">Spinal Manupulation</option>
                            <option value="">Electrotherapy</option>
                            <option value="">Manual Lymphatic</option>
                            <option value="">Medical Acupuncture</option>
                            <option value="">Therapeutic Exercise</option>
                            <option value="">Joint Mobilization</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                    <div class="form-group py-md-4 py-2 px-4 px-md-0">
                      <label for="name">Name</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Select Cleaners</option>
                            <option value="">John Doe</option>
                            <option value="">William Smith</option>
                            <option value="">Danny Green</option>
                            <option value="">Jason Thompson</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                    <div class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                      <input type="submit" value="Make an Appointment" class="btn btn-primary py-3 px-4">
                    </div>
                  </div>
                </div>
              </form>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid">
        <div class="row d-flex no-gutters" style="position:relative;top:-30px"><br/>
          <div class="ls-wrapper ls-in-out ls-hide-on-phone ls-hide-on-tablet service-menu" data-slide-index="1" style=" position:absolute; right:44%;top:1%;z-index: 1;  transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px; opacity: 1; "><div style="font-size: 15px;  font-weight: 700; z-index: auto;  border-width: 0px; border-radius: 0px; letter-spacing: 0px;" class="ls-layer" data-ls="offsetyin:bottom;durationin:2700;delayin:50;offsetyout:bottom;hover:true;hoverdurationout:0.25;" data-ls-slidein="1" data-ls-slideout="1" data-ls-active=""><a href="contact" class="slider-button"><span>Take Our Service</span></a></div></div>
          <div class="row" style="background:url(images/service1.jpg) no-repeat 50% 50%">
        <!--    <svg class="separator_type_5_path" preserveAspectRatio="none" viewBox="0 0 100 100" height="80" width="100%" version="1.1" style="position: relative;">
            <path d="M0 30 L50 100 L100 30 L100 100 L0 100 Z" fill="rgba(255,255,255,0)" class="menu_separator_background_color"></path>
            <path d="M0 0 L0 30 L50 100 L100 30 L100 0 Z" fill="#ffffff" class="menu_background_color"></path>
            <path d="M0 30 L50 100 L100 30" fill="none" stroke="#fff" stroke-width="0.5" class="menu_separator_border_color"></path>
          </svg> -->
          <div class="col-lg-8 col-md-8 col-12 col-sm-12 offset-lg-2 offset-md-2">
            <div class="sp_choose_heading_main_wrapper pst_bottompadder20">
             <br/><br/> <!-- <h4 style="text-align: center;" class="ftco-animate">WELCOME TO YELLOW BEE, THE BEST CLEANING SERVICE PROVIDERS IN QATAR</h4><br/> -->

              <h2><span>Why Choose Us</span></h2>

              <p>Choose us because of our reputation for excellence. For more than 7 years, we’ve earned a name for quality and customer service. Behind our commitment to excellence are few key attributes that define who we are and what makes us different from any other. Best part of our service is to aware the cleaners with health and safety. Therefore you would be willing to hire us.</p>
            </div>
          </div>
        </div>
        <div class="row text-center" style="margin: 4px 10px 0px 10px;;line-height:1.42857143">
          <div class="col-md-4 col-sm-12" style="margin-bottom:2px">
            <div class="welcome-box" style="min-height:135px;border:2px solid #000;padding:10px 15px;">
              
              <div class="single_text__block">
                            
                <i class="fa fa-users" style="font-size:40px;color:#f9d206;line-height:1.5;"></i>
              

                <h2>PROFESSIONAL STAFF</h2>
                <p>
                  We provide a dedicated team to deliver the best service.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12" style="margin-bottom:2px">
            <div class="welcome-box" style="min-height:135px;border:2px solid #000;padding:10px 15px;">
              
              <div class="single_text__block">
                
                <i class="fa fa-leaf" style="font-size:40px;color:#f9d206;line-height:1.5;"></i>
              
                <h2>ECO FRIENDLY</h2>
                <p>
                  Non toxic cleaning supplies are used your precious children &amp; pets.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12" style="margin-bottom:2px">
            <div class="welcome-box" style="min-height:135px;border:2px solid #000;padding:10px 15px">
              
                
              
              <div class="single_text__block">
                <i class="fa fa-money" style="font-size:40px;color:#f9d206;line-height:1.5;"></i>
                <h2>FAIR PRICES</h2>
                <p>
                  We provide customized cleaning services to save your money.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <img style="vertical-align: baseline !important; position:relative;" src="images/curve-bg-yelwnw.png">  
          <h1 class="qualities" data-aos="zoom-in"><b>Our Qualities</b></h1>
          <!-- <p class="trust-head">Qatar's most-trusted cleaning service provider</p> -->

      <div class="container-fluid content_div">

        <div class="row d-flex no-gutters" style="position:relative">

        <div class="col-lg-12 col-md-12 col-12 col-sm-12">


          <div class="row mb-5"><div class="col px-4 px-md-3"><div class="card-group"><div class="card our-qualities"><div class="card-body d-flex flex-column align-items-center justify-content-center text-center " data-aos="fade-left"><div class="imageup"><img alt="Everything your home needs" src="images/icon-5.png?fit=crop&amp;h=48&amp;auto=format,compress" height="48" class="b-lazy mb-3 b-loaded cardimage"></div><h5 class="h4 font-weight-bold card-title">Equipment And Supplies</h5><p class="card-text">
          We use top of the range supplies and equipment to ensure quality in work results and efficiency in time. We provide thorough cleaning using the right equipment.</p></div></div><div class="card our-qualities"><div class="card-body d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" ><div class="imageup"><img alt="The best professionals for your job" src="images/icon-7.png?fit=crop&amp;h=48&amp;auto=format,compress" height="48" class="b-lazy mb-3 b-loaded cardimage"></div><h5 class="h4 font-weight-bold card-title">The best professionals for your job</h5><p class="card-text">We measure and manage our service partners on their service quality to make sure our service is great. We hope you’ll choose to let us serve you</p></div></div><div class="card our-qualities"><div class="card-body d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-right"><div class="imageup"><img alt="Great customer service" src="images/icon-6.png?fit=crop&amp;h=48&amp;auto=format,compress" height="48" class="b-lazy mb-3 b-loaded cardimage"></div><h5 class="h4 font-weight-bold card-title">Great customer service</h5><p class="card-text">Incase you aren’t satisfied with any of our cleaning service, ring us back in 24 hours and we guarantee to send our crew to redo at no extra charge</p></div></div></div></div></div> 
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="working-steps">
    <div class="container cf">
      <div class="row justify-content-center mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <!-- <span class="subheading">Services</span> -->
          <h2 style="color:white;    font-family: cursive;"><b>How we works</b></h2>
        </div>
      </div>

      <div class="row mb-5"><div class="col px-4 px-md-3"><div class="card-deck">
        <div class="col-md-3 col-sm-6 card in-view " data-aos="fade-down-right" id="123"><img alt="Tell us what you need" src="images/11.png?fit=crop&amp;w=95&amp;h=105&amp;auto=format,compress&amp;q=46" height="103" width="98" class="b-lazy mw-100 mx-auto b-loaded"><div class="card-body text-center"><h5 class="h4 font-weight-bold card-title">Contact us for cleaning services</h5><p class="card-text">Request a quote via call, message, email, or whatsapp. Let us know what service you are looking for with us. </p></div></div><div class="col-md-3 col-sm-6 card in-view" data-aos="fade-up-right"  id="123"><img alt="Tell us what you need" src="images/22.png?fit=crop&amp;w=95&amp;h=105&amp;auto=format,compress&amp;q=46" height="100" width="105" class="b-lazy mw-100 mx-auto b-loaded"><div class="card-body text-center"><h5 class="h4 font-weight-bold card-title">Final Confirmation</h5><p class="card-text">Our executive will call you back to confirm the date and time of work. We’ll request your phone number so we can contact you. </p></div></div><div class="col-md-3 col-sm-6 card  in-view" data-aos="fade-down-right"><img alt="We will find the right professional" src="images/33.png?fit=crop&amp;w=105&amp;h=100&amp;auto=format,compress&amp;q=46" height="100" width="130" class="b-lazy mw-100 mx-auto b-loaded"><div class="card-body text-center"><h5 class="h4 font-weight-bold card-title">Work</h5><p class="card-text">Our Team will perform the cleaning job. Let our professionals do the work while you can sit & relax or focus on doing what you love </p></div></div><div class="col-md-3 col-sm-6 card  in-view" data-aos="fade-up-right"><img alt="Sit back and relax" src="images/44.png?fit=crop&amp;w=105&amp;h=128&amp;auto=format,compress&amp;q=46" height="100" width="128" class="b-lazy mw-100 mx-auto b-loaded"><div class="card-body text-center"><h5 class="h4 font-weight-bold card-title">Easy Payment</h5><p class="card-text">We accept cash, cheque, credit card, debit card, online payment, and direct payments.<br/><br/><br/></p></div></div></div></div></div>
    </div>

  </div>


<div class="container">
  <div class="row">
    <div class="thim-widget-cleaning-services thim-widget-cleaning-services-base"><div class="cleaning-services-tab">
      <ul class="nav nav-tabs" role="tablist" style="color: #172b42"><li role="presentation" class="active"><a href="#thimm-widget-cleaning-services-11600360135-1-32" data-toggle="tab"></a></li></ul>
      <div class="cleaning-services-content default"> <div role="tabpanel" class="tab-pane  active in row" id="thimm-widget-cleaning-services-11600360135-1-32"><div class="box-content"><div class="item-cleaning ftco-animate col-md-6 col-lg-3 col-sm-6"><div class="content-inner"><img src="images/house-cleaning-qatar.jpg" width="270" height="270" alt=""><div class="item-hover"><div class="content-item"><div class="widget-title"><h3><a  class="more-info"  href="#">HOUSE CLEANING</a></h3></div><div class="desc-widget"><p>We remove cobwebs, clean dust blinds and window ledges, scrub floors, dust furniture, clean table tops, windows, mirrors, cabinets and drawers.</p></div></div><span class="mark"></span></div></div></div><div class="item-cleaning ftco-animate col-md-6 col-lg-3 col-sm-6"><div class="content-inner"><img src="images/sofa-cleaning.jpg" width="270" height="270" alt=""><div class="item-hover"><div class="content-item"><div class="widget-title"><h3><a  class="more-info"  href="#">SOFA CLEANING</a></h3></div><div class="desc-widget"><p>We use a 4-step deep cleaning process to sterilize and sanitize your sofas.</p></div></div><span class="mark"></span></div></div></div><div class="item-cleaning ftco-animate col-md-6 col-lg-3 col-sm-6"><div class="content-inner"><img src="images/carpet-cleaning.jpg" width="270" height="270" alt=""><div class="item-hover"><div class="content-item"><div class="widget-title"><h3><a  class="more-info" href="#">CARPET CLEANING</a></h3></div><div class="desc-widget"><p>We deep clean your regular carpet, woolen carpet, Persian carpet and rugs, leaving them as good as new.</p></div></div><span class="mark"></span></div></div></div><div class="item-cleaning ftco-animate col-md-6 col-lg-3 col-sm-6"><div class="content-inner"><img src="images/matress-clean.jpg" width="270" height="270" alt=""><div class="item-hover"><div class="content-item"><div class="widget-title"><h3><a  class="more-info" href="#">MATTRESS CLEANING</a></h3></div><div class="desc-widget"><p>We deep clean all types of mattresses to remove dust mites and allergies.</p></div></div><span class="mark"></span></div></div></div></div>
      <p style="text-align: center; margin-top:5px"><a href="services" class="btn btn-secondary">See our services</a></p>
      <br/>
    </div></div></div></div>
  </div>
</div>
</section>


<section class="ftco-section" style="padding: 0px">
  <div class="review_counter"><div class="container"><div class="row"><div class="col-md-3">
    <img  data-aos="zoom-in" src="images/icon-1.png" alt=""><div class="counter" data-count="1150">1150</div><p class="count_header" data-aos="flip-right"> Happy Customers</p></div><div class="col-md-3">
      <img  data-aos="zoom-in" src="images/icon-2.png" alt=""><div class="counter" data-count="1150">1150</div><p class="count_header" data-aos="flip-right"> Completed Works</p></div><div class="col-md-3">
        <img  data-aos="zoom-in" src="images/icon-3.png" alt=""><div class="counter" data-count="50">50</div><p class="count_header" data-aos="flip-right"> Expert Workers</p></div><div class="col-md-3">
          <img  data-aos="zoom-in" src="images/icon-4.png" alt=""><div class="counter" data-count="106">106</div><p class="count_header" data-aos="flip-right"> Customer Reviews</p></div></div></div></div>

        </section>


        <section class="ftco-section ftco-no-pt">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
                <div class="heading-section ftco-animate text-center text-lg-left">
                  <h2>Our Team</h2><br/>
                  <p>Yellow Bee have very good service, flexibility, good price, good trained and hard working cleaners</p>
                  <p><a href="gallery" class="btn btn-secondary">View All Staff</a></p>
                </div>
              </div>
              <div class="col-md-4 col-lg-3 ftco-animate d-flex teamdiv">
                <div class="staff">
                  <div class="img-wrap d-flex align-items-stretch">
                    <div class="img align-self-stretch" style="background-image: url(images/yellow-tm1.jpg);"></div>
                  </div>
                  <div class="text pt-3 px-3 pb-4 text-center">
                    <h3>Team 1</h3>
                    <!-- <span class="position mb-2">Office Cleaner</span> -->
                    <div class="faded">
                      <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="https://www.facebook.com/7716Y" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/invites/contact/?i=qwmxx7h60a1i&utm_content=38vtt16" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                      </ul>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3 ftco-animate d-flex teamdiv">
                <div class="staff">
                  <div class="img-wrap d-flex align-items-stretch">
                    <div class="img align-self-stretch" style="background-image: url(images/yellow-team2.jpeg);"></div>
                  </div>
                  <div class="text pt-3 px-3 pb-4 text-center">
                    <h3>Team 2</h3>
                    <!-- <span class="position mb-2">Office Cleaner</span> -->
                    <div class="faded">
                      <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="https://www.facebook.com/7716Y" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/invites/contact/?i=qwmxx7h60a1i&utm_content=38vtt16" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3 ftco-animate d-flex teamdiv">
                <div class="staff">
                  <div class="img-wrap d-flex align-items-stretch">
                    <div class="img align-self-stretch" style="background-image: url(images/yellow-tm3.jpeg);"></div>
                  </div>
                  <div class="text pt-3 px-3 pb-4 text-center">
                    <h3>Team 3</h3>
                    <!-- <span class="position mb-2">Office Cleaner</span> -->
                    <div class="faded">
                      <ul class="ftco-social text-center">
                       <li class="ftco-animate"><a href="https://www.facebook.com/7716Y" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                       <li class="ftco-animate"><a href="https://www.instagram.com/invites/contact/?i=qwmxx7h60a1i&utm_content=38vtt16" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>
  <!--  <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section  text-center ftco-animate">
            <span class="subheading">Our Project</span>
            <h2>We have done many latest cleaning project</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-1.jpg);">
              <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">House Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-2.jpg);">
              <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Window Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-3.jpg);">
              <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Pool Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-4.jpg);">
              <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Office Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-5.jpg);">
              <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Carpet Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-6.jpg);">
              <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Garden Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-7.jpg);">
              <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Carpet Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/work-8.jpg);">
              <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4 text-center pt-5 mt-5">
                <div class="text w-100 mb-3 mt-4">
                  <h2><a href="work-single.html">Pool Cleaning</a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   -->
    <?php include('footer.php') ?>

  </body>
  </html>




