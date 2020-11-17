<?php 
	$x = 8;  
	$y = 10;

	// menggunakan operator aritmatika untuk menjumlahkan nilai
	echo $x + $y;
	echo "<br>";

	// menggunakan operator penugasan
	$x = 10;
	$x -= 8;

	// menampilkan hasil dari 10-8
	echo $x;
	echo "<br>";

	// menggunakan operator perbandingan
	$x = 100;  
	$y = "100";
	// mengembalikan nilai true jika $x tidak sama dengan $y
	var_dump($x !== $y); 
	echo "<br>";

	// menggunakan operator increment untuk menambahkan
	$x = 10;  
	echo ++$x; //mengitung 10 ditambah 1
	echo "<br>";

	// menggunakan operator logika
	$x = 100;  
	$y = 50;
	if ($x == 100 && $y == 50) {
	    echo "Hello world!";
	}
	echo "<br>";
?>