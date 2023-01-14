<?php

	//convert string to array

	$students = "Mia, Milica, Andrija, Marko";
	$studentsArray = explode(",", $students);
	print_r($studentsArray);

	//convert array to string
	$studentsList = implode(",", $studentsArray);
	echo $studentsList;

	//limited number of array elements
	$studentsArray = explode(",", $students, 2 );
	print_r($studentsArray);