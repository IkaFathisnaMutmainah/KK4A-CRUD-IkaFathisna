<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <title>CRUD | IKA </title>
</head>
<body>
    <div class="container mt-5">
    <a href="add.php" class="btn btn-primary btn-md mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
    <form method="get" action="">
        <label for="cari">Cari Siswa</label>
        <input type="text" name="cari">    
    </form>
    <br>

    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <th>ID Siswa</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>ID Jurusan</th>
            <th>Aksi</th>
        </thead>

        <?php
            $sqlGet = "SELECT * FROM buku";
            $query = mysqli_query($conn, $sqlGet);

            if (isset($_GET['cari'])) {
                $query = mysqli_query($conn, "SELECT * FROM buku WHERE nama_siswa LIKE '%".
            $_GET['cari']."%'");
            }

            while($data = mysqli_fetch_array($query)) {
                echo "
                <tbody>
                    <tr>
                    <td>$data[id_siswa]</td>
                    <td>$data[nis]</td>
                    <td>$data[nama_siswa]</td>
                    <td>$data[jenis_kelamin]</td>
                    <td>$data[alamat]</td>
                    <td>$data[id_jurusan]</td>
                    <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='update.php?id_siswa=$data[id_siswa]' class='btn btn-sm btn-warning'><i class='fa fa-edit'></i>Update</a> 
                        </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='delete.php?id_siswa=$data[id_siswa]' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a> 
                        </div> 
                        </div>
                    </td>
                    </tr>
                </tbody>
                ";
            }
        ?>
    </table>
    </div>
</body>
</html>
