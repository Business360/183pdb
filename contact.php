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

	<!--
        ====================
        START: MOBILE DESIGN
        ====================
    -->
	<a href="tel: 09 377 7700" class="fancybox-2 btn btn-default hidden-sm hidden-md hidden-lg hidden-xlg" id="header-call-button-spacing">
            CALL US
        </a>
    <!--
        ==================
        END: MOBILE DESIGN
        ==================
    -->

	<div class="get">
		<div class="container">
			<div class="row">
			<div class="column mcb-column one column_column">
				<div class="column_attr align_center">
					<div style="border: 4px solid #a0915f; padding: 30px 40px;">
						<h2 class="themecolor" style="margin: 0;text-align:center;">
							<i class="icon-phone"></i> <a href="tel:09-218-7777" style="color:#114783"> 09 377 7700</a> | <a href="tel:0800-349-86684" style="color:#114783">0800 FIX TOOTH (0800 349 86684)</a>
						</h2>
						</div>
					</div>
				</div>
				<div class="column mcb-column one column_divider ">
					<hr class="no_line" style="margin: 0 auto 40px;">
				</div>
			</div>
		</div>
	</div>

	
	<div class="feedback">
		<div class="container" style="padding:0px 0px !important;width:100%;">
			<div class="col-md-8">
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
		<div class="col-md-4">
			<div class="col-md-6">
			<h3 style="margin-bottom: 7px;">Address</h3>
											<p  style="margin-bottom: 5px;font-size:14px;">
												<a href="https://goo.gl/maps/2BJoYfKx2dMKeRS8A" target="_blank">183 Ponsonby Road, Cnr of Ponsonby & Franklin Road, Auckland</a>

											</p>
											<p style="margin-bottom: 5px;font-size:14px;">
												<b>Tel No. </b>: <a href="tel:093777700" style="color:#626262">09 377 7700</a>
											</p>
											<!-- <p style="margin-bottom: 2px;font-size:14px;">
												<b>Toll Free No. :</b> <br><a href="tel:0800-349-86684" style="color:#626262">0800 FIX TOOTH (0800 349 86684)</a>
											</p>  -->
											<p style="margin-bottom: 2px;font-size:14px;">
												<b>Email :</b> <a href="mailto: info@183ponsonbydental.co.nz"> info@183ponsonbydental.co.nz</a>
											</p>
										   </div>
										    <div class="col-md-6">
											<h3 style="margin-bottom: 7px;">Working Time</h3>

											<table style="font-size:12px;">
												<tbody>
													<tr style="background-color: var(--bg-primary);">
														<td style="color:#fff;padding: 10px;"><b>Mon - Sat</b></td>
														<td style="color:#fff;padding: 10px;">9:00 AM - 5:00 PM</td>
													</tr>
													<tr style="background-color: var(--bg-primary);">
														<td style="color:#fff;padding: 10px;"><b>Sunday</b></td>
														<td style="color:#fff;padding: 10px;">10:00 AM - 3:00 PM</td>
													</tr>
												</tbody>
											</table>
										</div>	
										<div class="col-md-12">
											<img src="assets/images/contact.jpg">
										</div>	
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