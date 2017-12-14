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
			$group[] = array("machine" => $data[$i]['machine'], "active" => $data[$i]['active']);			
		}
	}
}

$array = $group;
$result = array();

$first = $array[0];
for($i=1; $i<count($array); $i++){
	$result = array_intersect ($first, $array[$i]);
	$first = $result;
}
die(print_r($result));

for($i = 0; $i < count($group); $i++)
{
	$last = '';
	print $last . "\n";
	//print $group[$i]['group1']['active'] . "\n";
	$first = $group[$i]['group1']['active'];
	
	$last = $first;
	
	print $first . "\n";		
}
//die(print_r($group));

?>
