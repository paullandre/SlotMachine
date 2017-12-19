<?php

if(isset($_POST) != null)
{
	$map = array();
		
	$data = $_POST['data'];
	$count = count($data);	
	$group1 = array();
	$group2 = array();
	$group3 = array();	
	$map1 = array();
	$map2 = array();
	$map3 = array();
	
	$pattern1 = array();
	$pattern1 = array();
	$pattern1 = array();
	$mp1 = array();
	$mp2 = array();
	$mp3 = array();
	
	$wild = array();
	
	for($i = 0; $i < $count; $i++)
	{			
		if($data[$i]['machine'] == "machine1" || $data[$i]['machine'] == "machine2" || $data[$i]['machine'] == "machine3" 
			|| $data[$i]['machine'] == "machine4" || $data[$i]['machine'] == "machine5")
		{			
			array_push($map1, $data[$i]['machine'] . "_" . $data[$i]['active']);
			array_push($group1, $data[$i]['active']);
			if($data[$i]['active'] == 10)
			{
				array_push($wild, $data[$i]['machine']);
			}
		}
		else if($data[$i]['machine'] == "machine6" || $data[$i]['machine'] == "machine7" || $data[$i]['machine'] == "machine8" 
			|| $data[$i]['machine'] == "machine9" || $data[$i]['machine'] == "machine10")
		{			
			array_push($map2, $data[$i]['machine'] . "_" . $data[$i]['active']);
			array_push($group2, $data[$i]['active']);
		}
		else if($data[$i]['machine'] == "machine11" || $data[$i]['machine'] == "machine12" || $data[$i]['machine'] == "machine13" 
			|| $data[$i]['machine'] == "machine14" || $data[$i]['machine'] == "machine15")
		{			
			array_push($map3, $data[$i]['machine'] . "_" . $data[$i]['active']);			
			array_push($group3, $data[$i]['active']);
		}
		
		/* PATTERN 1 */
		if($data[$i]['machine'] == "machine1" || $data[$i]['machine'] == "machine7" || $data[$i]['machine'] == "machine13")
		{			
			array_push($mp1, $data[$i]['machine'] . "_" . $data[$i]['active']);
			array_push($pattern1, $data[$i]['active']);
		}
	}
}

/*
for($i = 1; $i <= 3; $i++)
{	
	${"dup{$i}"} = array_count_values(${"group{$i}"});
	${"win{$i}"} = array();
	
	foreach(${"dup{$i}"} as $k => $v)
	{
		if($v > 2)
		{			
			foreach(${"map{$i}"} as $key => $value)		
			{
				$toClean = explode("_", $value);
				
				if($k == $toClean[1])
				{				
					array_push(${"win{$i}"}, $toClean[0]);
				}
			}
		}
	}
}

die(print_r(json_encode(array("result" => array("win1" => $win1, "win2" => $win2, "win3" => $win3)))));
*/
/* PATTERN 1 */
$patternDup1 = array_count_values($pattern1);
$patternWin1 = array();

//die(print_r($mp1));

foreach($patternDup1 as $k => $v)
{	
	if($v > 2)
	{			
		foreach($mp1 as $key => $value)		
		{
			$toClean = explode("_", $value);
			$machine = $toClean[0];
			$image   = $toClean[1];
			
			if($k == $image)
			{				
				array_push($patternWin1, $machine);
			}
		}
	}
}

//die(print_r(json_encode(array("result" => array("pattern1" => $pattern1)))));

/* GROUP 1 */
$dup1 = array_count_values($group1);
$win1 = array();

foreach($dup1 as $k => $v)
{	
	if($v > 2)
	{			
		foreach($map1 as $key => $value)		
		{
			$toClean = explode("_", $value);
			$machine = $toClean[0];
			$image   = $toClean[1];
			
			if($k == $image)
			{				
				array_push($win1, $machine);
			}
		}
	}
}

/* GROUP 2 */
$dup2 = array_count_values($group2);
$win2 = array();

foreach($dup2 as $k => $v)
{
	if($v > 2)
	{			
		foreach($map2 as $key => $value)		
		{
			$toClean = explode("_", $value);
			$machine = $toClean[0];
			$image   = $toClean[1];
			
			if($k == $image)
			{				
				array_push($win2, $machine);
			}
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
		foreach($map3 as $key => $value)		
		{
			$toClean = explode("_", $value);
			$machine = $toClean[0];
			$image	= $toClean[1];
			
			if($k == $image)
			{				
				array_push($win3, $machine);
			}
		}
	}
}

print_r(json_encode(array("result" => array("win1" => $win1, "win2" => $win2, "win3" => $win3, "pattern1" => $patternWin1, "wild" => $wild))));

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
