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
                    <li class="active">Payment Options</li>
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
	<a href="tel:080034986684" class="fancybox-2 btn btn-default hidden-sm hidden-md hidden-lg hidden-xlg" id="header-call-button-spacing">
            CALL US
        </a>
    <!--
        ==================
        END: MOBILE DESIGN
        ==================
    -->
   
    <!-- FAQ -->
    <div class="tipsfaq">
        <div class="container">
            <div class="row">
            <h2 class="section-title text-center">
                <span class="bold700">
                    Payment Options
                </span>
            </h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion"> 
                        <!-- FAQ ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <i class="fa fa-credit-card"></i> Credit Cards &amp; Barter Card </a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">All major credit cards including American Express , Visa , MasterCard , Farmers and Diners Club accepted (3.2% credit card surcharge fee will apply). Should you be in possession of a credit card not listed above, please discuss this with the receptionist who will be happy to help you.</div>
                            </div>
                        </div>
                        
                        <!-- FAQ ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"> <i class="fa fa-money"></i> EFTPOS/CASH </a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">And of course you are also welcome to settle your account using EFTPOS or cash.</div>
                            </div>
                        </div>
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