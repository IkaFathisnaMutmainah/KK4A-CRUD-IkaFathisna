<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD | IKA </title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php">Kembali</a>
    <form action="add.php" method="post">
        <label for="id_siswa">ID Siswa</label>
        <input type="text" id="id_siswa" name="id_siswa" class="form-control" required>

        <label for="id_siswa">NIS</label>
        <input type="text" id="id_siswa" name="nis"class="form-control" required>

        <label for="id_siswa">Nama Siswa</label>
        <input type="text" id="id_siswa" name="nama_siswa" class="form-control" required>

        <label for="id_siswa">Jenis Kelamin</label>
        <input type="text" id="id_siswa" name="jenis_kelamin" class="form-control" required>

        <label for="id_siswa">Alamat</label>
        <input type="text" id="id_siswa" name="alamat"class="form-control" required>

        <label for="id_siswa">ID Jurusan</label>
        <input type="text" id="id_siswa" name="id_jurusan" class="form-control" required>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
    </form>
    </div>

    <?php

        if (isset($_POST['tambah'])) {
            $id_siswa = $_POST['id_siswa'];
            $nis = $_POST['nis'];
            $nama_siswa = $_POST['nama_siswa'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $id_jurusan = $_POST['id_jurusan'];

            $sqlGet = "SELECT * FROM buku WHERE id_siswa='$id_siswa'";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);

            $sqlInsert = "INSERT INTO buku(id_siswa, nis, nama_siswa, jenis_kelamin, alamat, id_jurusan) VALUES ('$id_siswa', '$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$id_jurusan')";
            $queryInsert = mysqli_query($conn, $sqlInsert);

            if ($cek > 0) {
                echo "
                <div class='alert alert-danger'>Data gagal ditambahkan <a href='index.php'>Lihat Data</a></div>
                ";
            }
        }
        
    ?>
</body>
</html>
