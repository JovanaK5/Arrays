<?php

	//sort() and rsort()
	//indexed array

	$array1 = [5, 1, 3, 4, 2];
	print_r($array1);
	sort($array1);
	print_r($array1);
	rsort($array1);
	print_r($array1);

	//asort() and arsort()
	//associative array

	$array2 = ["2" => "Marija", "1" => "Stefan", "3" => "Jovana"];
	asort($array2);
	print_r($array2);
	arsort($array2);
	print_r($array2);

	//ksort() and krsort()

	ksort($array2);
	print_r($array2);
	krsort($array2);
	print_r($array2);


