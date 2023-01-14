<?php

	//indexed array
	$array  = ["Mon", "Tues" ,"Wed", "Thurs", "Fri", "Sat", "Sun"];
	var_dump($array) ;
	foreach ($array as $value) {
		echo $value . "<br>";     //access the values only
	}

	//associative array
	$array  = [0 => "Mon",1 => "Tues" ,2 =>"Wed",3 => "Thurs",4 => "Fri",5 => "Sat",6 => "Sun"];
	var_dump($array) ;

	$array  = ["Monday" => "Mon",1 => "Tues" ,2 =>"Wed",3 => "Thurs",4 => "Fri",5 => "Sat",6 => "Sun"];
	foreach ($array as $key => $value) {
		echo $key . "=>" .$value . "<br>";
	}

	//print the keys
	print_r(array_keys($array));

	//access only the keys
	foreach (array_keys($array) as $key) {
		echo $key . "<br>";
	}

	$user = [
				"Jovana" => "jovana@gmail.com",
				"Marija" => "marija@gmail.com",
				"Milos"  => "milos@gmail.com"
	];

	var_dump($user);
	echo $user["Jovana"] . "<br>";
	echo $user["Marija"] . "<br>";
	echo $user["Milos"] . "<br>";

	$user["Stefan"] = "stefan@gmail.com";
	var_dump($user) ;






