<?php

	
	$array = ["Mon", "Tues" ,"Wed", "Thurs", "Fri", "Sat", "Sun"];
	var_dump($array);

	$counter = 0;
	foreach ($array as $value) {
		echo $value . "<br>";
		echo "[$counter] => $value ". "<br>" ;
		$counter++;
	}


	$counter = 0;
	$array = ["Mon", 6 ,"Wed", true, "Fri",6.6 , "Sun"];
	foreach ($array as $value) {
		echo "[$counter] => $value ". "<br>" ;
		$counter++;
	}
	var_dump($array);