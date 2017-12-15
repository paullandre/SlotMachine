<?php

if(isset($_POST) != null)
{
	$map = array();
		
	$data = $_POST['data'];
	$count = count($data);	
	$group1 = array();
	$group2 = array();
	$group3 = array();
	$map3 = array();
	
	for($i = 0; $i < $count; $i++)
	{			
		if($data[$i]['machine'] == "machine1" || $data[$i]['machine'] == "machine2" || $data[$i]['machine'] == "machine3" 
			|| $data[$i]['machine'] == "machine4" || $data[$i]['machine'] == "machine5")
		{			
			array_push($group1, $data[$i]['active']);
		}
		else if($data[$i]['machine'] == "machine6" || $data[$i]['machine'] == "machine7" || $data[$i]['machine'] == "machine8" 
			|| $data[$i]['machine'] == "machine9" || $data[$i]['machine'] == "machine10")
		{			
			array_push($group2, $data[$i]['active']);
		}
		else if($data[$i]['machine'] == "machine11" || $data[$i]['machine'] == "machine12" || $data[$i]['machine'] == "machine13" 
			|| $data[$i]['machine'] == "machine14" || $data[$i]['machine'] == "machine15")
		{			
			array_push($map3, $data[$i]['machine'] . "_" . $data[$i]['active']);
			
			array_push($group3, $data[$i]['active']);
		}
	}
}

/* GROUP 3 */
$dup3 = array_count_values($group3);
$win3 = array();

foreach($dup3 as $k => $v)
{
	if($v > 2)
	{
		//print "$k => $v \n";
		
		foreach($map3 as $key => $value)		
		{
			$toClean = explode("_", $value);
			
			if($k == $toClean[1])
			{
				//print $toClean[0] . "\n";
				array_push($win3, $toClean[0]);
			}
		}
	}
}

print_r(json_encode(array("win" => $win3)));

die;

/*
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
	$first = $group[$i]['group1']['active'];
	
	$last = $first;
	
	print $first . "\n";		
}
*/
//die(print_r($group));

?>
