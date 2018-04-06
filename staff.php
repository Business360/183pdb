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
    <div class="page-title page-title-doctor bg-pattern" data-bgcolor="2BAAA1">
        <div class="page-title-overlay">
            <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-home"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="active">Our Staff</li>
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
	<a href="appointments.php" class="fancybox-2 btn btn-default hidden-sm hidden-md hidden-lg hidden-xlg" id="header-call-button-spacing">
            CALL US
        </a>
    <!--
        ==================
        END: MOBILE DESIGN
        ==================
    -->

    <div class="doctors-text">
        <div class="container">
            <div class="row">

                <h2 class="section-title text-center">
                    <span class="bold700">
                    Friendly Staff
                    </span>
                </h2>
                
                <!-- Staff 01 -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-staff-panel">
                    <div class="doctors-text-doctor">
                        <img src="assets/images/staff/shivam.jpg" alt="" />
                        <div class="doctors-text-doctor-name">Shivam Verma</div>
                        <div class="doctors-text-doctor-position">Owner</div>
                    </div>
                    <div class="doctors-text-right">
                    <p>Being the owner and business manager of The Dental Hub, Shivam works hard to ensure that the patients maximise their dental benefits and the claims are filed appropriately and in a timely manner. His warm, friendly and easily approachable attitude keeps his staff motivated to perform better.</p>
                    <p>With more than 15 years of professional experience, he always strives to walk that extra mile to make each patient feel part of the family and ensures every patient derives complete satisfaction from the treatment.</p>
                    </div>
                </div>

                <!-- Staff 02 -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-staff-panel">
                    <div class="doctors-text-left">
                    <p>Dr. Lowe has worked as a Dentist in the Hospital Services Dental Department at Wellington Hospital and rendered his services as Dental Surgeon in the Medical and Health, Dental Services Department, Hong Kong.</p>
                    <p>He has served the Dental Profession as a Committee member and then as the President of the Auckland Branch of the New Zealand Association, and also acted as a full time self-employed Dentist in West Auckland.</p>
                    </div>
                    <div class="doctors-text-doctor">
                        <img src="assets/images/staff/jeffery.jpg" alt="" />
                        <div class="doctors-text-doctor-name">Dr. Jeffery Lowe</div>
                        <div class="doctors-text-doctor-position">Dentist</div>
                    </div>
                </div>
                
                <!-- Staff 03 -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single-staff-panel">
                    <div class="doctors-text-doctor">
                        <img src="assets/images/staff/nikita.jpg" alt="" />
                        <div class="doctors-text-doctor-name">Dr. Nikita Verma</div>
                        <div class="doctors-text-doctor-position">Owner</div>
                    </div>
                    <div class="doctors-text-right">
                    <p>Nikita works on her philosophy of “Treating you as you would like to be treated” and has hands-on knowledge and experience in every department of dentistry. Her kind and welcoming nature seeks to build relationships with patients and make them feel like a family.</p>
                    <p>She did her BDS from Gujarat University (India), and practiced as a general dentist for 2 years before migrating to New Zealand. She holds memberships with New Zealand Dental Association and Auckland Dental Association and acts as an active participant in seminars and conferences to enhance and upgrade her skills.</p>
                    </div>
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