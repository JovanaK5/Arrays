<?php

	//example1
	$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$array = $array1;
	var_dump($array);

	//example2
	foreach ($array1 as $value) {
		$array2[] = $value;
	}
	var_dump($array2);

	//example3
	$array3 = ["1" => "Jovana", "2" => "Marija", "3" => "Stefan"];
	$array4 = $array3;
	var_dump($array4);

	//example4
	foreach ($array4 as $key => $value) {
		$array5[$key] = $value;
	}
	var_dump($array5);
