<?php 
	// untuk membuat suatu konsanta yaitu menggunakan fungsi define()
	
	// membuat konsanta GREETING
	define("GREETING", "Praktikum 6!");
	echo GREETING;
	echo "<br>";

	// membuat konsanta greeting
	define("GREETING", "Belajar PHP", true);
	echo greeting;
	echo "<br>";

	// membuat konsanta array dengan nama mobil
	define("mobil", [
		"Toyota",
		"Honda",
		"BMW"
	]);
	echo mobil[0];
	echo "<br>";

	define("konsanta", "Welcome to tugas banyak!");

	// fungsi untuk menampilkan konsanta
	function myTest() {
	echo konsanta;
	}

	myTest();
?>