<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data mahasiswa</title>
</head>
<body>
<div class="alert alert-secondary" role="alert">
    <div class = "container">
    <h1><center>Web Mahasiswa </center>
    </h1>
    <div class = "container">
    </div>
    <a class = "btn btn-success" href ="from_tambah.php">+ Tambah data baru </a>
    <br><br>
    <table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>NPM</th>
            <th>No.Telp</th>
            <th>Aksi</th>
        
        </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM mahasiswa") or die 
                (mysqli_error($conn));
                $nomor = 1;

            

            while ($data = mysqli_fetch_array($query)) {  ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['jurusan'] ?></td>
                    <td><?php echo $data['NPM'] ?></td>
                    <td><?php echo $data['telp'] ?></td>
                   <td colspan =2>
                    <a href ="form_edit.php?id=<?php echo $data['id'];?>" class="btn btn-primary"> Edit </button></a>
                    <a href="proses_hapus.php?id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Anda Ingin Hapus Data')">Hapus </a>
                   </td> 
                    
                </tr>
        <?php } ?>

        </tbody>
    </table>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
     integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     </div>
</body>
</html>