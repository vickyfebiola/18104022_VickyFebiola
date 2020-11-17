<?php
	// mengecek $x merupakan integer
	$x = 5985;
	var_dump(is_int($x));
	echo "<br>";

	// mengecek $x merupakan float
	$x = 10.365;
	var_dump(is_float($x));
	echo "<br>";

	// mengembalikan infinity value
	$x = 1.9e411;
	var_dump($x);
	echo "<br>";

	// mengembalikan NaN value
	$x = acos(8);
	var_dump($x);
	echo "<br>";

	// mengecek $x merupakan number atau numerik string
	$x = "Hello";
	var_dump(is_numeric($x));
	echo "<br>";
	
	// mengkonversi float ke integer
	$x = 23465.768;
	$int_cast = (int)$x;
	echo $int_cast;
?>