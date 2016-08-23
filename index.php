<?php

	//Generate 100 random numbers between 1-10,000
	for($x = 1; $x <= 100; $x++)
	{
		$numbers[] = rand(1, 10000);
	}
	//var_dump($numbers);
	function selection_sort($numbers)
	{
		for($counter = 0; $counter < count($numbers); $counter++)
		{
			$min = $numbers[$counter];
			$key = $counter;

			for($num = $counter + 1; $num < count($numbers); $num++)
			{
				if($numbers[$num] < $min)
				{
					$min = $numbers[$num];
					$key = $num;


				}
			}
			$temporary = $numbers[$counter];
			$numbers[$counter] = $min;
			$numbers[$key] = $temporary;
		}
		var_dump($numbers);
	}
	function microtime_float()
	{
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	} 

	$time_start = microtime_float();
	selection_sort($numbers);
	$time_end = microtime_float();
	$time = $time_end - $time_start;
	echo "Sorting took $time seconds \n";

?>