<!-- untuk menyimpan inputan data ke dalam tabel -->
<?php
	include 'koneksi.php';	// menyisipkan file koneksi yang sudah dibuat
	// menangkap / mengambil data menggunakan method post
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	// memnyimpan / memasukkan data inputan ke dalam tabel 'data'
	$sql = "INSERT INTO data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
	$add = $conn->query($sql);

	// menampilkan yang ada pada file tes.php
	if ($add) {
		$conn->close();
		header("location:tes.php");
		exit();
	} else {	// akan menampilkan error dan close otomatis
		echo "Error : ".$conn->error;
		$conn->close();
		exit();
	}
?>