<?php 
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		# code...
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TUGAS</title>
</head>
<body>
 <form>
 	<table>
 		<tr>
 			<td>Nama</td>
 			<td>:</td>
 			<td><?php echo $username; ?></td>
 		</tr>
 		<tr>
 			<td>Hobi</td>
 			<td>:</td>
 			<td>
 				<input type="checkbox" name="vehicle1" value="Bike">bike<br>
				<input type="checkbox" name="vehicle2" value="Car">car<br>
				<input type="checkbox" name="vehicle3" value="Boat">boat<br>
			</td>
 		</tr>
 		<tr>
 			<td>Gambar</td>
 			<td>:</td>
 			<td><input type="file" name="pictures"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td></td>
 			<td><input type="submit" name="submit_"></td>
 		</tr>
 	</table>
 </form>
</body>
</html>
<?php
?>
