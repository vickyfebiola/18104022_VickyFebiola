<?php
	$mobil = "blue";

	// percabangan switch case yang akan menampilkan output statement sesuai dengan value dalam variabel
	switch ($mobil) {
		case 'red':
			echo "Mobil anda berwarna Merah";
			break;
		case 'green':
			echo "Mobil anda berwarna Hijau";
			break;
		case 'blue':
			echo "Mobil anda berwarna Biru";
			break;
		default:
			echo "Gatau deh warna apa itu";
			break;
	}
?>