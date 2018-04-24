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

	<?php
		$searchstring =  $_GET['q'];
		$searchdata = get_search_details($searchstring);
		echo $searchdata;
		//echo $_GET['page'];
	?>

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