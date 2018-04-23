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
	<?php
		$url 				 = $_SERVER['REQUEST_URI'];
		$pagename1 = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
		if($pagename1 == "index.php"){
			$pagename =  $_GET['page'];
		}else{
			$pagename =  "home";
		}	
		$pagedata = get_page_details($pagename);
		echo $pagedata;
		//echo $_GET['page'];
	?>
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