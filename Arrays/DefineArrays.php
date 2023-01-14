<?php

	//define arrays
	$array = [1, 2, 3];

	//function to print arrays
	var_dump($array) ; 

	//human readable function
	print_r($array);

	//echo won't print the array

	//access and print array
	echo $array[0] . "<br>";
	echo $array[1] . "<br>";
	echo $array[2] . "<br>";

	//array length
	echo "Array length: " .count($array) . "<br>";

	//loop thru the array using for loop
	for ($count=0; $count < count($array) ; $count++) { 
		echo "$array[$count]" . "<br>";
	}

	//access array element inside string using array constant
	const ARRAY_ELEMENT = 2;
	//echo "{ $array[ARRAY_ELEMENT] }" . "<br>";

	//change array elements
	$array[0] = 5;
	$array[1] = 6;
	$array[2] = 7;
	print_r($array);

	//change array elements
	$array[0] = "Jovana";
	$array[1] = 6.6;
	$array[2] = true;
	var_dump($array);

	$array1 = [ "Jovana",
				 true,
				 65.99,
				 6
	];
	var_dump($array1);