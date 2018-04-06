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
					<li class="active">Appointments</li>
				</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="feedback">
		<div class="container">
			<div class="row">
			<h2 class="section-title">
				<span class="bold700">
				Make an Appointment
				</span>
			</h2>
			<p>Please note that this is not an actual appointment, but only a request for one. We will contact you for a confirmation shortly after. Thank you!</p>
			<div class="message">
				<div class="divide-xs"></div>
				<div class="alert"></div>
			</div>
			<form class="bookform-form" action="assets/php/modules/appointments/index.php" method="post">    
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item name">
						<input type="text" name="name" id="name1" data-validation="required" placeholder="Your name" />
						<div class="help help-sm help-red">!</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
						<input type="text" class="datepicker-f" id="datepicker1" name="dob" data-validation="required" placeholder="Date of Birth" />
						<div class="help help-sm help-red">!</div>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item email">
					<input type="text" name="email" id="email1" placeholder="E-mail" />
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item phone">
						<input type="tel" name="phone" id="phone1" data-validation="required" placeholder="Phone" />
						<div class="help help-sm help-red">!</div>
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-practices">	
					<h3 class="text-center">Preferred Practices</h3>
					<input type="checkbox" name="Consultation"/> Consultation
					<input type="checkbox" name="Cleaning"/> Cleaning
					<input type="checkbox" name="Examination"/> Examination
					<input type="checkbox" name="Fast Braces"/> Fast Braces
					<input type="checkbox" name="Tooth Whitening"/> Tooth Whitening
					<input type="checkbox" name="Gum Treatment"/> Gum Treatment
					<input type="checkbox" name="Extraction"/> Extraction
					<input type="checkbox" name="Fillings"/> Fillings
					<input type="checkbox" name="Root Canal Treatment"/> Root Canal Treatment
					<input type="checkbox" name="Crowns"/> Crowns
					<input type="checkbox" name="Bridges"/> Bridges
					<input type="checkbox" name="Dentures"/> Dentures
					<input type="checkbox" name="Others"/> Others
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
		</div>
	</div>

	<div class="map" id="map"> </div>
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