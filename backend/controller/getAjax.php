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
		if($data[$i]['machine'] == "machine1" || $data[$i]['machine'] == "machine2" || $data[$i]['machine'] == "machine3" 
			|| $data[$i]['machine'] == "machine4" || $data[$i]['machine'] == "machine5")
		{
			array_push($group, array("group1" => array("machine" => $data[$i]['machine'], "active" => $data[$i]['active'])));
		}
	}
		
}

for($i = 0; $i < count($group); $i++)
{
	print $group[$i]['group1']['active'] . "\n";
}
//die(print_r($group));

?>
