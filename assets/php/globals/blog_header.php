<nav class="navbar navbar-default ">

	  <div class="col-md-12" style="background-color: #276a7a;color:#fff;">
		<!-- <div class="col-md-4" style="padding-top:15px;">
			<i class="flaticon-navigation-arrow"></i> <b>Address : </b> <a href="https://goo.gl/maps/VsSM4uHKyGS2" style="color:#fff;" target="_blank">73A Rosebank Road, Behind Subway - Avondale , Auckland 1026</a>
		</div>	
		<div class="col-md-4" style="padding-top:15px;text-align:center;">
			<a href="#" style="color:#fff;" class="hidden-xs">
				<i class="fa fa-envelope"></i>
			</a>
			<a href="mailto:info@thedentalhub.co.nz" style="color:#fff;" class="hidden-xs">info@thedentalhub.co.nz</a>&emsp;
			<a  style="color:#fff;" href="https://www.facebook.com/thedentalhubauckland" target="_blank">
				<i class="fa fa-facebook"></i>
			</a>&emsp;
			<a style="color:#fff;" href="https://goo.gl/maps/VsSM4uHKyGS2" target="_blank">
				<i class="fa fa-google"></i>
			</a>
		</div>
		<div class="col-md-4">
			<a style="color:#fff;" href="tel:092187777"><div class="header-phone"> <i class="fa fa-phone"></i>  09 218 7777 </div></a>
            <a href="tel:0800 349 86684" style="color:#fff;" ><div class="header-phone"> <i class="fa fa-phone"></i> 0800 FIX TOOTH (0800 349 86684) </div></a>
		</div>	
		 -->
		 <div class="col-md-12 header-email">
			<a href="#" style="color:#fff;">
				<i class="fa fa-envelope"></i>
			</a>
			<a href="mailto:info@thedentalhub.co.nz" style="color:#fff;">info@thedentalhub.co.nz</a>
		</div>
	</div>		
      <div class="container-fluid">
      	<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="../index.php"><img src="assets/images/logo.png" class="navbar-brand" alt="" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="padding-top:20px;">
          	<?php
          		$furl = basename($_SERVER['REQUEST_URI']);
          	?>
          	<li <?php if($furl == "../index.php"){ ?> class="active" <?php } ?> ><a href="index.php">Home</a></li>
            <li <?php if($furl == "../about.php"){ ?> class="active" <?php } ?> ><a href="about.php">About</a></li>
            <li <?php if($furl == "../services.php"){ ?> class="active" <?php } ?> ><a href="services.php">Services</a></li>
            <li <?php if($furl == "../contact.php"){ ?> class="active" <?php } ?> ><a href="contact.php">Contact Us</a></li>
            <li <?php if($furl == "../appointments.php"){ ?> class="active" <?php } ?> ><a href="appointments.php">Make An Appointment</a></li>
          </ul>
          <div class="navbar-right header-search-box">
			<script>
					(function() {
						var cx = '008889523455649713763:whobmz3wbne';
						var gcse = document.createElement('script');
						gcse.type = 'text/javascript';
						gcse.async = true;
						gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(gcse, s);
					})();
				</script>
				<gcse:search></gcse:search>
    		</div>
        </div><!--/.nav-collapse -->
    		
      </div>
    </nav>
