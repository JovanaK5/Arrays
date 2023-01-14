<?php

	$array = [1, 2, 3, 4, 5];
	print_r($array);

	unset($array[3]);
	print_r($array);

	$array2 = ["first" => 1, 2, 3, 4, "last" => 5];
	print_r($array2);

	unset($array2["first"]);
	print_r($array2);

	$array2[] = 6;
	print_r($array2);