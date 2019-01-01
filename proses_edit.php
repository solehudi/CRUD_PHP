<?php 
include 'koneksi.php';

$id= $_POST['id'];
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$jurusan= $_POST['jurusan'];
$NPM = $_POST['NPM'];
$telp =$_POST['telp'];

$query = mysqli_query ($conn, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat',jurusan='$jurusan',
NPM='$NPM',telp='$telp' WHERE id='$id'")
 or die (mysqli_error($conn));

if ($query) {
    #code...
    echo "<script>alert('Data Berhasil Diubah');
    window.location ='indek.php';</script>";
}else {
    echo "<script>alert('Data Gagal !!!');</script>";
}
?>

