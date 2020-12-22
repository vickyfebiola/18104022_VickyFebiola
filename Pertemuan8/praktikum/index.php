<?php
    // meng-include / memuat file koneksi.php
    include "koneksi.php";
    // memulai sesi
    session_start();
    // variabel kelas untuk pilihan kelas
    $kelas = ['SE-02-A', 'SE-02-B','SE-02-C'];
    // sql untuk menampilkan / mengambil data pada tabel 'data'
    $sql = "SELECT * FROM data";
    // untuk untuk menyambungkan ke database dan menjalankan perintah sql
    $data = $conn->query($sql);
?>
<!-- kode program html -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link rel untuk Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Link rel untuk CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>CRUD PHP</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <!-- meng-include / memuat file read_message.php -->
                <?php include "read_message.php" ?>
            </div> 
            <!-- data pada form akan dikirim ke file simpan.php -->
            <form action="simpan.php" method="post">
                <!-- form group untuk label dan kolom pada form -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" class="form-control" required>
                        <option value="">Pilih</option>
                        <?php foreach($kelas as $kl) : ?>
                        <option value="<?= $kl; ?>"><?= $kl; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="col-lg-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Data Mahasiswa</span>
                <!-- untuk menghitung jumlah data yang ada, diambil berdasarkan id -->
                <?php 
                $sql = 'SELECT count(id) FROM data';
                $result = $conn->query($sql);
                $count = mysqli_fetch_array($result); ?>
                <button class="btn btn-secondary btn-circle" style="border-radius: 50px;"><?php echo $count[0]; ?></button>
            </h4>

            <!-- perulangan untuk menampilkan data yang terdapat dalam tabel -->
            <?php foreach($data as $dt) : ?>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-md-6">
                            
                            <h4><?= $dt['nama']; ?></h4>

                        </div>
                        <div class="col-md-6">
                            
                            <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-trash"></span>
                            </a>
                            <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                <span class="fa fa-edit"></span>
                            </a>

                            <p class="text-right"><?= $dt['kelas'] ?></p>
                        </div>
                    </div>
                <div class="row">
                        <div class="col-md-12">
                            <p><?= $dt['alamat']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Link untuk Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>