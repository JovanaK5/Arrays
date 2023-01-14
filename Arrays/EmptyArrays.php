<?php

	//empty arrays
	$array = [];

	echo count($array) . "<br>";
	var_dump($array);
	print_r($array);

	if (empty($array) ) {
		echo "Array is empty" . "<br>";
	}

	$array[0] = [10];
	var_dump($array);

	//reset an array
	$array = [];

	$array = [ [] ];
	var_dump($array);