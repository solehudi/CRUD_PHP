<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data mahasiswa</title>
</head>
<body>
<div class="alert alert-success" role="alert">
   <div class ="container">
   <h1><center>form Tambah Data</center></h1>
   <form action ="proses_tambah.php" method ="post">
    <form>
        <div class="form-group">
        <div>
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name ="nama" placeholder="Masukan Nama">
        </div>  
        <div class="form-group">
             <label for="alamat">Alamat</label>
             <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="Nama">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="masukan jurusan">
        </div>
        <div class="form-group">
            <label for="NPM">NPM</label>
            <input type="text" class="form-control" id="NPM" name="NPM" placeholder="masukan NPM">
        </div>
        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp" placeholder="masukan No.Telp">
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