<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$jurusan= $_POST['jurusan'];
$NPM = $_POST['NPM'];
$telp =$_POST['telp'];

$query = mysqli_query ($conn, "INSERT INTO mahasiswa (id,nama,alamat,jurusan,NPM,telp)
VALUES (0, '$nama','$alamat','$jurusan','$NPM','$telp')") or die (mysqli_error($conn));

if ($query) {
    #code...
    echo "<script>alert('Data Berhasil Ditambahkan');
    window.location ='indek.php';</script>";
}else {
    echo "<script>alert('Data Gagal !!!');</script>";
}
?>

