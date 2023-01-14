<?php

	$array = [];

	$array[0] = 1;
	$array[6] = true;
	$array[7] = 16.4;
	$array[8] = "JK";

	//adding new values to array
	$array[] = "String1";
	$array[] = "String2";

	var_dump($array);

	foreach ($array as $value) {
	 	echo $value . "<br>";
	 } 

	echo empty($array[4]);