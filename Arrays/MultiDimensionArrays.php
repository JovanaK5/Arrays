<?php

	//single dimension - indexed array
	$array = [1, 2, 3];
	var_dump($array) ;

	//single dimension - associative array
	$user = [
				"Jovana" => "jovana@gmail.com",
				"Marija" => "marija@gmail.com",
				"Milos"  => "milos@gmail.com"
	];

	var_dump($user);

	//multi dimension with indexed array
	$array2 = [

		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9]

	];
	var_dump($array2);

	foreach ($array2 as $singleArray) {
		var_dump($singleArray);
	}

	foreach ($array2 as $singleArray) {
		echo "[";

		foreach($singleArray as $value){
			echo $value . ",";
		}
		echo "]";
	}	

	//multi dimension with associative array
	$array3 = [
			"emailList1" => [
						"Jovana" => "jovana@gmail.com",
						"Marija" => "marija@gmail.com",
						"Milos"  => "milos@gmail.com"
			],

			"emailList2" => [
						"Nikola" => "nikola@gmail.com",
						"Milica" => "milica@gmail.com",
						"Marko"  => "marko@gmail.com"
			]
];

	foreach($array3 as $valueArray){
		foreach ($valueArray as $value) {
			echo $value . "<br>";
		}
	}

	foreach($array3 as $key => $valueArray){
		echo "Values for key : $key" . "<br>";
		foreach ($valueArray as $value) {
			echo $value . "<br>";
		}

	}
	
