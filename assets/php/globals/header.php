<!-- Header HTML Content -->

<!-- =========================
     TOP BAR
============================== -->
<div class="top-bar" id="top-bar">
  <div class="container">
    <div class="row"> 
      
      <!-- TOP BAR LEFT -->
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <div class="top-bar-adress"> <i class="flaticon-navigation-arrow"></i> Address :230 Stoddard Road, cnr of Stoddard road and Richardson road, Mt Roskill Auckland </div>
      </div>
      
      <!-- TOP BAR RIGHT -->
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="top-bar-social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-googlex"></i></a> <a href="#"></div>
        <div class="top-bar-mail"> <i class="fa fa-envelope"></i> <a href="#">info@afd.co.nz</a> </div>
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
        <div class="header-logo"> <a href="#"><img src="assets/images/logo.svg" alt="" />
            <span class="bold600 color-child-6">
              Avondale
          </a> </div>
      </div>
      
      <!-- HEADER BUTTONS -->
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="header-button"> <a href="#bookform1" class="fancybox-2 btn btn-default">
            <span class="plus">
              +
            </span>
            MAKE AN APPOINTMENT</a> </div>
        <div class="header-phone"> <i class="fa fa-phone"></i> 09 620 7771 </div>
        <div class="header-phone"> <i class="fa fa-phone"></i> 0800 4 MOUTH (0800 4 66884) </div>
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
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
    
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
          <div class="top-menu-logo"> <a href="#"><img src="assets/images/logo.svg" alt="" />
              <span class="bold600 color-child-6">
                DENTAL
              </span>
              <span class="color-child-5">
                CLINIC
              </span>
            </a> </div>
          <div class="mobile-bar">
            <div class="show-menu" id="show-menu"> <i class="fa fa-bars"></i> </div>
            <div class="logo-for-mobile"> <a href="#" title="#"> <img src="assets/images/logo_m.png" alt=""> </a> </div>
          </div>
        </div>
        <ul class="nav navbar-nav">
          <li>
			<a href="index.html">Home</a>
			</li>
          <li>
			<a href="about.html">About Us</a>
			</li>
          <li class="dropdown">
			<a href="services.php">Services</a>
          </li>
          <li class="dropdown">
			<a href="doctors.php">Our Doctors</a>
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