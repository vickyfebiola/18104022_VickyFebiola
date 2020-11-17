<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
</head>
<body>
<?php
	// syntax pada PHP yaitu sensitif jadi untuk penulisan variabel harus sesuai sedangkan untuk penulisan keyword tidak termasuk case sensitif

	// mendeklarasikan variabel
	$color = "red";
	$COLOR = "blue";
	$coLOR = "yellow";

	// menampilkan teks serta value dari variabel yang dipanggil
	echo "My car is " . $color . "<br>";
	ECHO "My house is " . $COLOR . "<br>";
	echo "My boat is " . $coLOR . "<br>";
?>
</body>
</html>