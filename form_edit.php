<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data mahasiswa</title>
</head>
<body>
    <div class="aler alert-info" role="alert">
   <div class ="container">
   <h1><center>Form Edit Data</center></h1>
   <form action ="proses_edit.php" method ="post">
        <?php
            include "koneksi.php";
            $id = $_GET['id'];

            $query = mysqli_query ($conn, "SELECT * FROM mahasiswa where id = '$id'") 
            or die (mysqli_error($conn));
            $data = mysqli_fetch_array($query);
        ?>
        <div class="form-group">
        <div>
            <label for="nama">nama</label>
            <input type = "hidden" name ="id" value = "<?php echo $data['id'] ?>">
            <input type="text" class="form-control" id="nama" name ="nama" value = "<?php echo $data['nama']?>">
        </div>  
        <div class="form-group">
             <label for="alamat">alamat</label>
             <textarea class="form-control" id="alamat" name="alamat"  rows="3">"<?php echo $data['alamat']?>"</textarea>
        </div>
        <div class="form-group">
            <label for="Nama">jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value = <?php echo $data['jurusan']?>>
        </div>
        <div class="form-group">
            <label for="NPM">NPM</label>
            <input type="text" class="form-control" id="NPM" name="NPM" value = "<?php echo $data['NPM']?>">
        </div>
        <div class="form-group">
            <label for="telp">telp</label>
            <input type="text" class="form-control" id="telp" name="telp" value = "<?php echo $data['telp']?>">
        </div>
        <button type="submit" class="btn btn-primary"> Simpan </button>
        <button type="reset" class="btn btn-danger">Reset</button>
        
    </form>


   </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
     integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     </div>
</body>
</html>