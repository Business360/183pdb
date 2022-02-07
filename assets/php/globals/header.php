<nav class="navbar navbar-default ">

	 <div class="col-md-12 header-email" style="background-color: var(--bg-primary);color:#fff;">
		 <div class="col-md-6 header-top-1">

			<a href="#" style="color:#fff;">
				<i class="fa fa-envelope"></i>
			</a>
			<a href="mailto:info@183ponsonbydental.co.nz" style="color:#fff;">info@183ponsonbydental.co.nz</a>
		</div>
    <!-- <div class="col-md-2 header-top-2">

      <a href="tel:080034986684" style="color:#fff;">0800 FIX TOOTH (0800 349 86684)</a>
    </div> -->
    <div class="col-md-6 header-top-3">

      <a href="tel:093777700" style="color:#fff;"> 09 377 7700</a>
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
          <a href="index.php"><img src="assets/images/logo.png" class="navbar-brand" alt="" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="padding-top:20px;">
          	<?php
          		$furl = basename($_SERVER['REQUEST_URI']);
          	?>
          	<li <?php if($furl == "index.php"){ ?> class="active" <?php } ?> ><a href="index.php">Home</a></li>
            <li <?php if($furl == "about.php"){ ?> class="active" <?php } ?> ><a href="about.php">About</a></li>
            <li <?php if($furl == "services.php"){ ?> class="active" <?php } ?> ><a href="services.php">Services</a></li>
            <li <?php if($furl == "contact.php"){ ?> class="active" <?php } ?> ><a href="contact.php">Contact Us</a></li>
            <li <?php if($furl == "appointments.php"){ ?> class="active" <?php } ?> ><a href="appointments.php">Make An Appointment</a></li>
          </ul>
          <div class="navbar-right hidden-xs" style="margin-top:35px;margin-right:10px;">
		  	<h4><a href="qcard.php" class="twelve-month" style="color:#fff; background-color: var(--bg-primary); padding:10px;">12 Months Interest Free</a></h4>
    		</div>
        </div><!--/.nav-collapse -->
    		
      </div>
    </nav>
