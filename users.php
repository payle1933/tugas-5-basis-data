<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data Dari Database PHP </title>
	<style>
		table,tr,td {
			border: 1px solid lightsteelblue;
		}
		thead {
			background-color: #ffb6c1;
		}
	</style>
</head>
<body>
	<h1 style>KLINIK MAULANA HASAN</h1>
	<table>
		<thread>
			<tr>
				<td>No</td>
				<td>Id</td>
				<td>username</td>
				<td>password</td>
				<td>Nama Lengkap</td>
			</tr>
		</thread>
		<?php
		include "koneksi.php";
		$no = 1;
		$query = mysqli_query($conn, 'SELECT * FROM users');
		while ($data = mysqli_fetch_array($query)) {
		?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
				<td><?php echo $data['username'] ?></td>
				<td><?php echo $data['password'] ?></td>
				<td><?php echo $data['Nama_lengkap'] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>