<?php
	session_start();
	$konek = mysqli_connect('localhost','root','','tabel');
	$id = $_SESSION["id"];
	$query = "SELECT * FROM paket WHERE id = $id";
 	$view = mysqli_query($konek,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PAKET</title>
</head>
<body>
	<h2> UPDATE PAKET </h2>
		<table border="2">
			<form action="" method="POST">
				<?php 	while ($paket = mysqli_fetch_array($view)) { ?>
					<tr>
						<td> Isi Paket </td>
						<td> : </td>
						<td><?php echo $paket['isi_paket'];?>
						</td><br>
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
						<td colspan="5"><input type="submit" name="update" value="Update"></td>
					</tr>	
				<?php }
				if (isset($_POST['update'])){	
				}
				?>
				}
			</form>
		</table>
</body>
</html>