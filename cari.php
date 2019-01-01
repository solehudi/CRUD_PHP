<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="indek.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query("select * from mahasiswa where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query("select * from mahasiswa");		
	}
	$no = 0;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table>