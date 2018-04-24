<?php

// Including config file
include("../../config.php");

// Get search details from db
function get_search_details($searchstring){
	$dbhandle   		= db_connect();
	$baseurl    		= baseurl();
 //echo $searchstring;

	$sql        		= "SELECT * from `page_details` WHERE `page_data` LIKE '%$searchstring%' ";
	$result     		= mysql_query($sql, $dbhandle);
	while($row = mysql_fetch_assoc($result))	{
		$details[] = $row;
	}
	return $details;
}

?>