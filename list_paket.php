<!DOCTYPE html>
<html>
<head>
	<title>LIST PAKET</title>
</head>
<body>
<table>
	<h2> LIST PAKET </h2>
	<table>
	<form action="" method="POST">
		<tr>
			<td> Isi Paket </td>
			<td> : </td>
			<td><input type="text" name="isi_paket"></td><br>
		</tr>
		<tr>
			<td> Sasaran </td>
			<td> : </td>
			<td> <select name = "sasaran">
				<option value="Aan"> Aan </option>
				<option value="Yuni"> Yuni </option>
				<option value="Adi"> Adi </option>
				<option value="Saputri"> Saputri </option>
			</select> </td><br>
		</tr>
		<tr>
			<td> Tanggal Datang </td>
			<td> : </td>
			<td><input type="date" name="tanggal_datang"></td><br>
		</tr>
		<tr>
			<td> Penerima </td>
			<td> : </td>
			<td><input type="text" name="penerima"></td><br>
		</tr>
		<tr>
			<td> Tanggal Ambil </td>
			<td> : </td>
			<td><input type="date" name="tanggal_ambil"></td>
		</tr>
		<tr>
			<td colspan="5"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
</table>
</table>
</body>
</html>

<?php
$konek = mysqli_connect('localhost','root','','tabel');
if(isset($_POST['submit'])){
	$isi_paket = $_POST['isi_paket'];
	$sasaran = $_POST['sasaran'];
	$tanggal_datang = $_POST['penerima'];
	$penerima = $_POST ['penerima'];

$query = mysqli_query($konek, "INSERT INTO paket(isi_paket, sasaran,tanggal_datang,penerima,tanggal_ambil) VALUES('$isi_paket','$sasaran','$tanggal_datang','$penerima','$tanggal_ambil')");
$query=mysqli_query($query,$konek);
	if($query){
		echo "Data sukses";
	}else{
		echo "GAGAL".mysqli_query($query);
	}
}