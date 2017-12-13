<?php

if(isset($_POST) != null)
{
	$map = array();
		
	$data = $_POST['data'];
	$count = count($data);
	$toClean = array();
	$group = array();
	
	for($i = 0; $i < $count; $i++)
	{		
		if(in_array("machine5", $data[$i]))
		{
			print $data[$i]['active'] . "\n";
		}
	}
		
}
die(print_r($data));

?>