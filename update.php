<?php
    include 'koneksi.php';

    $id_siswa = $_GET['id_siswa'];

    $sqlGet = "SELECT * FROM buku WHERE id_siswa='$id_siswa'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
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
    <form action="update.php" method="post">
        <label for="id_siswa">ID Siswa</label>
        <input type="text" id="id_siswa" name="id_siswa" value="<?php echo "$data[id_siswa]";?>" class="form-control" readonly>

        <label for="id_siswa">NIS</label>
        <input type="text" id="nis" name="nis" value="<?php echo "$data[nis]";?>" class="form-control" required>

        <label for="id_siswa">Nama Siswa</label>
        <input type="text" id="nama_siswa" name="nama_siswa" value="<?php echo "$data[nama_siswa]";?>" class="form-control" required>

        <label for="id_siswa">Jenis Kelamin</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo "$data[jenis_kelamin]";?>" class="form-control" required>

        <label for="id_siswa">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo "$data[alamat]";?>" class="form-control" required>

        <label for="id_siswa">ID Jurusan</label>
        <input type="text" id="id_jurusan" name="id_jurusan" value="<?php echo "$data[id_jurusan]";?>" class="form-control" required>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Update Data">
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

            
            $sqlUpdate = "UPDATE buku SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_jurusan='$id_jurusan'
                        WHERE id_siswa='$id_siswa'";

            $queryUpdate = mysqli_query($conn, $sqlUpdate);

            header("location: index.php");
        }
        
    ?>
</body>
</html>
