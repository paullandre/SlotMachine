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
		//$toCLean[] = explode("_", $data[$i]);
	}
		
}
die(print_r($_POST['data']));

?>