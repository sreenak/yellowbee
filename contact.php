
<?php include('header.php') ?>

<div class="page_title_section">
            <div class="page_title_overlay"></div>
            <div class="page_header text-center">
                <div class="container">
                    <div class="row">
                        <!-- section_heading start -->
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="page_header_line">
                            	<br/><br/>
                                <h1 class="pst_bottompadder30"><span>contact us</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="row">
                        <div class="page_header_bottom">
                            <ul class="sub_title">
                                <li><a href="#"> Home </a></li>
                                <li class="icon_breamcum">&gt;</li>
                                <li>contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	

<div class="contact_us_page_wrapper">
            <div class="cnt_page_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-12 col-sm-12 offset-lg-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="cnt_icon_wrapper wow zoomIn  animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                    <div class="cnt-icon-img">
                                        <a href="tel:+97470143055"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="cnt-icon-content">
                                        <p>
                                          <a href="tel:+97470143055">+974 70143055</a><br>
                                          <a href="tel:+974 77163398">+974 77163398</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="cnt_icon_wrapper wow zoomIn  animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                    <div class="cnt-icon-img">
                                        <a href="mailto:yellowbeeqatar@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="cnt-icon-content">
                                        <p>
                                            <a href="mailto:yellowbeeqatar@gmail.com"> yellowbeeqatar@gmail.com </a> <br>
                                            <a href="mailto:yellowbeenquiry@gmail.com"> yellowbeenquiry@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                                <div class="cnt_icon_wrapper wow zoomIn  animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                    <div class="cnt-icon-img">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </div>
                                    <div class="cnt-icon-content">
                                        <p>
                                            Commercial Street,<br/> Maither, Qatar
                                        </p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>


	
<!-- includeing php mail form submit -->
<?php 
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$error = '';
$name = '';
$email = '';
$phone = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["phone"]))
 {
  $error .= '<p><label class="text-danger">Phone is required</label></p>';
 }
 else
 {
  $phone = clean_text($_POST["phone"]);
  if(preg_match("/^[0-9]{3}-[0-9]{8}$/", $_POST["phone"])) {
   $error .= '<p><label class="text-danger">Invalid phone format. Try +974-1234567</label></p>';
  }
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
      $error .= '<p><label class="text-danger">Enter Captche</label></p>';
        // exit;
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfIqcsZAAAAANb7KLmpDWBCNSPOCeuxykHbd9LX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == false)
    {
      $error .= '<p><label class="text-danger">Invalid Captche</label></p>';
    } else
    {



 if($error == '')
 {

//   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
  $mail->Port = 587;        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'yellowbeeenquiry@gmail.com';     //Sets SMTP username
  $mail->Password = 'mynewbusiness';     //Sets SMTP password
  $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = $_POST["email"];     //Sets the to email address for the message
  $mail->FromName = $_POST["name"];    //Sets the From name of the message
  $mail->AddAddress('yellowbeeqatar@gmail.com', 'Yellow Bee Qatar');//Adds a "To" address
  // $mail->AddCC("yellowbeenquiry@gmail.com", $_POST["name"]); //Adds a "Cc" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML    
  $mail->Subject = "Enquiry email from Yellow Bee website";    //Sets the Subject of the message
  $mail->Body = 'You have enquiry email from <br/> Name:&nbsp;&nbsp; ' .$_POST["name"]. ',<br/> Email:&nbsp;&nbsp;' .$_POST["email"]. ', <br/>Phone Number:&nbsp;&nbsp;' .$_POST["phone"]. ',<br/>Message:&nbsp;&nbsp; ' .$_POST["message"];    //An HTML or plain text message body
  if($mail->Send())        //Send an Email. Return true on success or false on error
  {
   $error = '<label class="text-success">Your message was sent, Thank you for contacting us!</label>';
  }
  else
  {
   $error = '<label class="text-danger">Something Happened, Please try Again</label>';
  }
  $name = '';
  $email = '';
  $phone = '';
  $message = '';
 }
}
}

?>
<div class="sp_fm_contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                        <div class="contact_form_section">
                            <h4>leave your message</h4>
                             <?php echo $error; ?>
                             <p class="pst_toppadder10 pst_bottompadder30">If you have any queries, leave us a message here. We will contact you soon.<br/></p>

                               <form method="post">
                                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="inquiry_section-pos">
                                            <div class="form-group">
                                                <label class="sr-only">Name</label>
                                                <input type="text" name="name" placeholder="Full Name"  value="<?php echo $name; ?>" class="require form-control">
                                            </div>
                                        </div>
                                        <div class="inquiry_section-e">
                                            <div class="form-group">
                                                <label class="sr-only">Email</label>
                                                <input type="email" name="email" placeholder="Email" class="require form-control" data-valid="email" value="<?php echo $email; ?>" data-error="Email should be valid.">
                                            </div>
                                        </div>
                                        <div class="inquiry_section-p">
                                            <div class="form-group">
                                                <label class="sr-only">Phone</label>
                                                <input type="text" name="phone" placeholder="Phone" value="<?php echo $phone; ?>"  class="require form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="inquiry_section-m">
                                            <div class="form-group">
                                                <label class="sr-only">Message</label>
                                                <textarea rows="7" value="<?php echo $message; ?>"  name="message" placeholder="Message" class="require form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                                        <div class="response"></div>
                                        <div class="cntct_2_btn_wrapper">

                                      <div class="g-recaptcha" data-sitekey="6LfIqcsZAAAAAPsmnFD0gUENwtIEiB209UH4eidi"></div>
                                        	       <input type="submit" name="submit" value="Send" class=" btn cntct_btn btn-primary  submitForm" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                    <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                        <!--contact_section_info start-->

                        <div class="contact_section_hours">
                            <h5 style="color: white">HOURS OF OPERATION</h5>
                            <ul class="working-hours">
                                <li>Monday <span>7:30 am - 8.30 pm</span></li>
                                <li>Tuesday <span>7:30 am - 8.30 pm</span></li>
                                <li>Wednesday <span>7:30 am - 8.30 pm</span></li>
                                <li>Thursday <span>7:30 am - 8.30 pm</span></li>
                                <li>Friday <span>closed</span></li>
                                <li>Saturday <span>7:30 am - 8.30 pm</span></li>
                                <li>Sunday <span>7:30 am - 8.30 pm</span></li>
                            </ul>
                        </div>

                        <!--contact_section_info end-->
                    </div>
                </div>
            </div>
        </div>
  <div class="map_main_wrapper">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Maither.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn sale</a></div><style>.mapouter{position:relative;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
        </div>




<?php include('footer.php') ?>

  
