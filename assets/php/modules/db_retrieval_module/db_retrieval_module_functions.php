<?php

// Including the config file
include("../../config.php");

// Get page details from database by page name
function get_page_details($pagename){
	$dbhandle   		= db_connect();
	$baseurl    		= baseurl();
	//echo $pagename;

	$sql        		= "SELECT * from `page_details` WHERE `page_title` = '$pagename' ";
	$result     		= mysql_query($sql, $dbhandle);
	while($row = mysql_fetch_assoc($result))	{
		$details[] = $row['page_data'];
	}
	return $details[0];
}

?>