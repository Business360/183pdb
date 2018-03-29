<!-- Header HTML Content -->

<!-- =========================
     TOP BAR
============================== -->
<div class="top-bar" id="top-bar">
  <div class="container">
    <div class="row">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 105px;">
				<div class="top-bar-adress">
					<i class="flaticon-navigation-arrow"></i> <b>Address:</b> <a href="https://goo.gl/maps/VsSM4uHKyGS2" target="_blank">73A Rosebank Road, Behind Subway - Avondale , Auckland 1026</a>
				</div>
				<div class="top-bar-mail">
					<a href="#">
						<i class="fa fa-phone"></i>
					</a>
					<a href="tel:0800 349 86684">0800 FIX TOOTH (0800 349 86684)</a> | 
					<a href="#">
						<i class="fa fa-phone"></i>
					</a>
					<a href="tel:092187777">09 218 7777</a>
				</div>
				<div class="top-bar-social">
					<a href="#">
						<i class="fa fa-envelope"></i>
					</a>
					<a href="#">info@thedentalhub.co.nz</a>
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-google"></i>
					</a>
				</div>
				<a href="#bookform1" class="fancybox-2 btn btn-default" id="header-make-an-appointment-spacing">
					<span class="plus">+</span> MAKE AN APPOINTMENT
				</a>
			</div>
		</div>
    </div>
  </div>
</div>
<!-- =========================
     END TOP BAR   
============================== -->


<!-- =========================
     HEADER
============================== -->
<div class="header" id="header">
  <div class="container">
    <div class="row"> 
      
      <!-- HEADER LOGO -->
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <div class="header-logo">
          <a href="#">
            <img src="assets/images/logo.png" alt="" />
          </a>
        </div>
      </div>
  </div>
</div>
<!-- =========================
     END HEADER
============================== -->

<!-- =========================
    POPUP FORMS
============================== -->
<div class="bookform bookform-1" id="bookform1">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="assets/php/modules/appointments/index.php" method="post">
    
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name1" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="tel" name="phone" id="phone1" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email1" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker1" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker1" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message1" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="bookform-right-info-1">
      <h5>Patient Details</h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    <div class="bookform-right-info-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
  </div>
</div>
<!-- =========================
    END POPUP FORMS
============================== -->

<!-- =========================
     MAIN MENU
============================== -->
<div id="smartposition"></div>
<div class="top-menu" id="top-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-bar-cont">
          <div class="top-menu-logo">
            <a href="#">
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			  	<img src="assets/images/logo.png" alt="" />
			  </div>
			</a>
			<!-- HEADER BUTTONS -->
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-hidden mobile-header-buttons">
                <div class="header-button"> <a href="#bookform1" class="fancybox-2 btn btn-default">
                    <span class="plus">
                      +
                    </span>
                    MAKE AN APPOINTMENT</a> </div>
                <div class="header-phone"> <i class="fa fa-phone"></i>  09 218 7777 </div>
                <div class="header-phone"> <i class="fa fa-phone"></i> 0800 FIX TOOTH (0800 349 86684) </div>
              </div>
		  	</div>
          <div class="mobile-bar">
            <div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
            <div class="logo-for-mobile"> <a href="#" title="#"> <img src="assets/images/logo.png" alt=""> </a> </div>
          </div>
        </div>
        <ul class="nav navbar-nav">
          <li>
			<a href="index.php">Home</a>
			</li>
          <li>
			<a href="about.php">About Us</a>
			</li>
          <li class="dropdown">
			<a href="services.php">Services</a>
          </li>
          <li class="dropdown">
			<a href="staff.php">Our Staff</a>
          </li>
          <li class="dropdown">
			<a href="blog.php">Blog</a>
          </li>
          <li class="dropdown">
			<a href="gallery.php">Gallery</a>
          </li>
          <li class="active">
			<a href="contact.php">Contact Us</a>
		  </li>
          <li>
			<a href="payments.php">Payment Options</a>
		  </li>
          <li>
			<a href="qcard.php">12 Months Interest Free</a>
		  </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- =========================
     END MAIN MENU
============================== -->