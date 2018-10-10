<!DOCTYPE html>
<html lang="en">
<?php
	// Including head file
	include("assets/php/globals/head.php");
?>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


        <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
        <link href="assets/css/bootstrap-touch-slider.css" rel="stylesheet" media="all">

<body>

	<?php
		// Including header file
		include("assets/php/globals/header.php");
    ?>
    
    <!-- Start: Main Section -->
<!--
	====================
	START: MOBILE DESIGN
	====================
-->
	<a href="tel:09 218 7777" class="fancybox-2 btn btn-default hidden-sm hidden-md hidden-lg hidden-xlg" id="header-call-button-spacing">
		CALL US
	</a>
<!--
	==================
	END: MOBILE DESIGN
	==================
-->

<!--
	=============
	HEADER SLIDER
	==============
-->
<div class="row slider_main_div" >
	<div class="col-md-3 slider_form" style="line-height:35px;margin-top:20px;">
		<h3>GET IN TOUCH WITH US TODAY!</h3>
		<span class="slider_span">We'll get back in touch with you as soon as we can!</span><br>
		<span class="slider_span">For more info</span><br>
		<span class="slider_span">call on 09 218 7777</span>
		<form action="assets/php/modules/slider_form/index.php" method="post" name="slider_form">
			<div class="slider_form_content">
				<input type="text" name="name" id="name" required="" placeholder="Enter your name" />
				<input type="text" name="phone" id="phone" required="" placeholder="Enter your phone" minlength="10" maxlength="11" onKeyPress="return isNumber(event)"/>
				<input type="email" name="email" id="email" required="" placeholder="Enter your email" /><br>
				<textarea name="message" id="message" required="" placeholder="Enter your message" rows="4"></textarea>
				<input type="submit" name="slider_form_submit" class="slider_btn btn btn-primary" />
			</div>
		</form>
	</div>
	<!-- col 4 close -->
	<div class="col-md-9" style="padding:0px;">
		
  <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/01.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_right">
                                <h1 data-animation="animated zoomInRight">The Dental Hub</h1>
                                <p data-animation="animated fadeInLeft">Quality Dentistry at Affordable Price</p>
                                <a href="services.php" class="btn btn-default" data-animation="animated fadeInLeft">Services</a>
                                <a href="appointments.php"  class="btn btn-default" data-animation="animated fadeInRight">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/02.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated flipInX">Straight Teeth</h1>
                        <p data-animation="animated lightSpeedIn">Less Cost Less Time</p>
                        <a href="services.php" class="btn btn-default" data-animation="animated fadeInUp">Services</a>
                        <a href="appointments.php"  class="btn btn-default" data-animation="animated fadeInDown">Appointment</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/03.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">The Gift</h1>
                        <p data-animation="animated fadeInRight">of your most radiant smile.</p>
                        <a href="services.php" class="btn btn-default" data-animation="animated fadeInLeft">Services</a>
                        <a href="appointments.php" class="btn btn-default" data-animation="animated fadeInRight">Appointment</a>
                    </div>
                </div>
                <!-- End of Slide -->
				
																	<div class="item">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/04.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">Philips Zoom</h1>
                                <p data-animation="animated fadeInLeft"> Teeth Whitening in safest possible way.</p>
                                <a href="services.php" class="btn btn-default" data-animation="animated fadeInLeft">Services</a>
                                <a href="appointments.php"  class="btn btn-default" data-animation="animated fadeInRight">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/05.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">Emergency Dentist</h1>
                        <p data-animation="animated lightSpeedIn">Professional Service<br><br> Fastbraces Master Provider</p>
                        <a href="services.php" class="btn btn-default" data-animation="animated fadeInUp">Services</a>
                        <a href="appointments.php"  class="btn btn-default" data-animation="animated fadeInDown">Appointment</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="assets/images/slider/06.jpg" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated zoomInLeft">The Dental Hub</h1>
                        <p data-animation="animated fadeInRight">Opens 7 Days</p>
                        <a href="services.php" class="btn btn-default" data-animation="animated fadeInLeft">Services</a>
                        <a href="appointments.php" class="btn btn-default" data-animation="animated fadeInRight">Appointment</a>
                    </div>
                </div>
                <!-- End of Slide -->
	

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->

	</div>
	<!-- col 8 close -->
</div>
<!--
	=================
	END HEADER SLIDER
	=================
-->

<!--
	=========
	SERVICES
	=========
-->
<div class="services" id="services"> 
	
	<!-- SERVICES ITEM -->
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-4">
		<div class="service-icon"> <i class="flaticon-medical"></i> </div>
		<div class="service-title">
			<h2>Emergency Dentist</h2>
		</div><br>
		<h4> Call 09 218 7777</h4>
		<h4> 0800 FIX TOOTH (0800 349 86684)</h4>
	</div>
	
	<!-- SERVICES ITEM -->
		<a href="services.php" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service" style="color:#fff;background-color:#095c83;" >
		<div>
		<div class="service-icon"> <i class="flaticon-medical-1"></i> </div>
		<div class="service-title">
			<h2>Services</h2>
		</div><br>
		<h4>At The Dental Hub, we offer amenities and</h4>
		<h4>services not easily available in Auckland city</h4>
	</div></a>
  
	<!-- SERVICES ITEM -->
		<a href="contact.php" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-2" style="color:#fff;"><div  >
			
	<div class="service-icon"> <i class="fa fa-clock-o"></i> </div>
		<div class="service-title">
			<h2>Business Hours</h2>
		</div><br>
		<h4>Monday - Saturday : 9:00 AM - 5:00 PM</h4>
		<h4>Sunday: 10:00 AM - 3:00 PM</h4><br>
	</div></a>
	
	<!-- SERVICES ITEM -->
	<a href="https://goo.gl/maps/VsSM4uHKyGS2"  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-3" target="_blank" style="color:#fff;">
		<div>
		<div class="service-icon"> <i class="fa fa-map-marker"></i> </div>
		<div class="service-title">
			<h2>Location</h2>
		</div><br>
		<h4>73A Rosebank Road, Behind Subway</h4>
		<h4>Avondale , Auckland 1026</h4><br><br>
	</div>
</div></a>
<!-- 
	============
	END SERVICES
	============
-->

<!-- 
	=======
	Partners
	=======
-->
	<div class="doctors">
		<div class="full-container" style="padding:0px 40px;">
			<div class="row">
				<!-- Clinic Gallery -->
				<div class="col-md-5">
					<h3 class="text-center">Our Clinic</h3>
					<iframe class="youtube" src="https://www.youtube.com/embed/tK0eMgAUfBg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

				<!-- Partners ITEM -->
				<div class="col-md-3">
					<h3 class="text-center">Finance Partner</h3>
					<div class="partners-item-image" style="top: 50px;"> 
						<a href="https://wss.qmastercard.co.nz/Osso/mcard/initialize?tid=Dtcuc93SXXyj4_UVAimhDA&amp;requestvalue=ULGvmUwt3CgzHkC152ctQyy5m2LSSo5iV4ZWrL9c23L01rFgvqM_VM-wozxJjUsZ&amp;murl=http://www.thedentalhub.co.nz/" target="_blank">
							<img src="assets/images/partners/qcard.png" class="qcard-img" alt="">
						</a>
						
					</div>
				</div>

				<!-- Partners ITEM -->
				<div class="col-md-2">
					<h3>Fastbraces Master</h3>
					<h3>Provider</h3>
					<div class="partners-item-image"> 
						<img src="assets/images/partners/fastbraces.png" alt="" />
					</div>
					<p style="padding-left:10px;">Dental Today is proud to be New Zealand's premier dental office to offer the amazing Fastbraces Technology. Call or email us to discover how Dental Today and Fastbraces Technology can team up to give you a smile that you have always dreamed of.</p>
				</div>

				<!-- Partners ITEM -->
				<div class="col-md-2">
					<h3>Philips Zoom Teeth</h3>
					<h3>Whitening</h3>
					<div class="partners-item-image"> 
						<img src="assets/images/partners/philips.png" alt="" />
					</div>
					<p>Our whitening procedure has been perfected through years of experience to give you the whitest teeth in the safest possible way.</p>
				</div>
			</div>
		</div>
	</div>
<!-- 
	===========
	END Partners
	===========
-->

<!-- 
	=============
	TESTIMONIALS
	=============
-->
<div class="review">
  <div class="container">
    <div class="row">
      <h2 class="section-title">
        <span class="bold7007070">
          TESTIMONIALS
        </span>
      </h2>
      <div class="review-container">
        <div class="owl-review" id="owl-review2"> 
          
          <!-- REVIEW ITEM -->
          <div class="review-item">
            <div class="review-item-text">Now I've got my tooth back, I can eat anything I like again.  I would recommend The Dental Hub Implant Centre to anyone with a missing or failing tooth - they're amazing....</div>
            <div class="review-item-name">John</div>
            <div class="review-item-quote"><img src="assets/images/quote.png" alt="" /></div>
          </div>
          
          <!-- REVIEW ITEM -->
          <div class="review-item">
            <div class="review-item-text">"I previously had a very bad dental experience 10 years ago to point where I was making my own temporaries... Now, I looked all over the world except USA as it was too expensive.</div>
            <div class="review-item-name">Robert</div>
            <div class="review-item-quote"><img src="assets/images/quote.png" alt="" /></div>
          </div>
        </div>
        <!-- REVIEW BUTTONS -->
        <div class="carousel-btn carousel-next" id="next-review"><i class="fa fa-angle-right"></i></div>
        <div class="carousel-btn carousel-prev" id="prev-review"><i class="fa fa-angle-left"></i></div>
      </div>
    </div>
  </div>
</div>
<!-- 
	=================
	END TESTIMONIALS
	=================
-->
<!-- 
	===============
	Payment Methods
	===============
-->

<div class="payment-options">
  <div class="container">
    <div class="row">
      <h2 class="section-title">We
        <span class="bold7007070">
          Accept
        </span>
	  </h2>
    </div>
  </div>
  <img src="assets/images/payment_methods/hero_e.png" alt="">
</div>

<!-- 
	===================
	END Payment Methods
	===================
-->

    <!-- End: Main Section -->

	<?php
		// Including footer file
		include("assets/php/globals/footer.php");
	?>

	<?php
		// Including foot file
		include("assets/php/globals/foot.php");
	?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
        

        <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
        <script src="assets/js/bootstrap-touch-slider.js"></script>
        
        <script type="text/javascript">
            $('#bootstrap-touch-slider').bsTouchSlider();
        </script>

</body>
</html>