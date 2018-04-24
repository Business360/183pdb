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
	<div style="padding:20px 20px 20px 100px;">
	<?php 
		$searchstring =  $_GET['q'];
	?>
	<h3>Search for the word : <?php echo $searchstring ?></h3><br>
	<?php
		$searchdata = get_search_details($searchstring);
		//print_r($searchdata);
		$i=1;
		foreach($searchdata as $value){
			$pagename = $value['page_title'];
			echo "<a href='index.php?page=$pagename'><h4>".$i.". ".$value['page_title']."</h4></a>";
			$i++;
		}
	?>
</div>
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