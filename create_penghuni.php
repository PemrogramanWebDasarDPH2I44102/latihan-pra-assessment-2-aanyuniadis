<!DOCTYPE html>
<html>
<head>
	<title>Create Penghuni</title>
</head>
<body>
<table border="2">
	<form action="" method="POST">
		<h2> CREATE PENGHUNI </h2>
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td><input type="text" name="nama_penghuni"></td>
		</tr>
		<tr>
			<td> Unit </td>
			<td> : </td>
			<td> <input type="text" name="unit"></td>
		</tr>
		<tr> 
			<td> Nomor KTP </td>
			<td> : </td>
			<td><input type="text" name="no_ktp"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit"></td>
		</tr>	
	</form>
</table>
</body>
</html>
<?php
$konek = mysqli_connect('localhost','root','','tabel');
if(isset($_POST['submit'])){
	$nama_penghuni = $_POST['nama_penghuni'];
	$unit = $_POST['unit'];
	$no_ktp= $_POST['no_ktp'];

$query = mysqli_query($konek, "INSERT INTO penghuni(nama_penghuni,unit,no_ktp) VALUES('$nama_penghuni','$unit','$no_ktp')");
$query=mysqli_query($query,$konek);
	if($query){
		echo "Data sukses";
	}else{
		echo "GAGAL".mysqli_query($query);
	}
}