<?php
	// menampilkan panjang/length string
	echo "Hello World! = ".strlen("Hello World!"); 
	echo "<br>";

	// menampilkan jumlah kata
	echo "Vicky Febiola = ".str_word_count("Vicky Febiola");
	echo "<br>";

	// mereverse/membalikan kata
	echo "PHP = ".strrev("PHP");
	echo "<br>";

	//mencari lokasi kata 'Amanda' dalam string
	echo "Vicky Febiola Amanda = ".strpos("Vicky Febiola Amanda", "Amanda"); 
	echo "<br>";

	// mereplace kata vicky dengan febiola
	echo str_replace("vicky", "febiola", "hai vicky"); 
?>