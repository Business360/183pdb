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
			//$pagedata = strip_tags($value['page_data']);
			echo "<a href='index.php?page=$pagename'><h4 style='color:#1a0dab;font-size:18px;'>".$value['page_title']."</h4></a>";
			$actuallink = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$url_info = parse_url($actuallink);
			//print_r($url_info['path']);
			$rurl = str_replace("search.php","index.php?page=".$pagename,$url_info['path']);
			$domain = $url_info['scheme'] .'://'. $url_info['host'];
			$url_minus_filename = $domain . $rurl;
			echo "<a href='index.php?page=$pagename'><h4 style='color:#006621;font-size:14px;'>".$url_minus_filename."</h4></a><br>";
			//echo "<p>".$pagedata."</p>";
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