<!DOCTYPE html>
<html lang="en">
<?php
	// Including head file
	include("assets/php/globals/head.php");
?>
<body>

	<?php
		// Including header file
		include("assets/php/globals/header.php");
	?>

	<!-- Start: Main Section -->
	<div class="page-title page-title-contacts bg-pattern" data-bgcolor="3B4B89">
		<div class="page-title-overlay">
			<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li class="breadcrumb-home"><a href="index.php"><i class="fa fa-home"></i></a></li>
					<li class="active">Contact us</li>
				</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="get">
		<div class="container">
			<div class="row">
			<h2 class="section-title">how to get Us</h2>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
				<div class="get-item-icon"> <i class="fa fa-map-marker"></i> </div>
				<h4 class="get-item-title">Location</h4>
				<p class="get-item-text"><a href="https://goo.gl/maps/VsSM4uHKyGS2" target="_blank">73A Rosebank Road, Behind Subway - Avondale , Auckland 1026</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
				<div class="get-item-icon"> <i class="fa fa-phone"></i> </div>
				<h4 class="get-item-title">Phone</h4>
				<p class="get-item-text">09 218 7777</p>
				<p class="get-item-text">0800 FIX TOOTH (0800 349 86684)</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
				<div class="get-item-icon"> <i class="fa fa-envelope"></i> </div>
				<h4 class="get-item-title">Email</h4>
				<p class="get-item-text">info@thedentalhub.co.nz
			</div>
			</div>
		</div>
	</div>

	<div class="map" id="map"> </div>

	<div class="feedback">
		<div class="container">
			<div class="row">
			<h2 class="section-title">
				<span class="bold700">
				Send Us A Message
				</span>
			</h2>
			<div class="message">
				<div class="divide-xs"></div>
				<div class="alert"></div>
			</div>
			<form action="assets/php/modules/contact/index.php" method="post" autocomplete="off" id="contactForm">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name" id="name" data-validation="required" placeholder="Your name" />
					<div class="help help-sm help-red">!</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone" id="phone" data-validation="required" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
					</div>
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
						<input type="text" name="email" id="email" data-validation="required" placeholder="E-mail" />
					<div class="help help-sm help-red">!</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
						<input type="text" name="subject" id="subject" data-validation="required" placeholder="Subject" />
						<div class="help help-sm help-red">!</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message" id="message" data-validation="required" placeholder="Your message.."></textarea>
					<div class="help help-sm help-red">!</div>
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
					SEND
					</button>
				</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	<!-- End: Main Section -->

	<?php
		// Including footer file
		include("assets/php/globals/footer.php");
	?>

	<?php
		// Including foot file
		include("assets/php/globals/foot.php");
	?>
</body>
</html>