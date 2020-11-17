<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- menampilkan form input dengan action $_SERVER untuk menyimpan informasinya dan mengembalikannya -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name : <input type="text" name="fname">
		<input type="submit">
	</form>

	<?php
		// menggunakan $_SERVER dengan elemen REQUEST_METHOD mengembalikan metode permintaan pada method POST
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// menyimpan nilai dan melakukan method POST
			$name = $_POST['fname'];

			// kondisi untuk menampilkan inputan
			if (empty($name)) {
				echo "Name is empty";
			} else {
				echo "<br>Namakuu ".$name;
			}
		}
	?>

	<!-- memanggil method GET -->
	<br>
	<p>Method GET</p>
	<a href="get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>
