<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Karunia Adina Widadi</td>
					<td>karuniaadina@gmail.com</td>
					<td>Bogor</td>
					<td>+6285779190292</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Tiara Adina Widadi</td>
					<td>Tiaradina78@gmail.com</td>
					<td>Cibinong</td>
					<td>+62856555635</td>
				</tr>

				<?php
				 $no = $_POST['nomor'];
                 $nama= $_POST['nama_lengkap'];
                 $email= $_POST['email'];
                 $alamat= $_POST['alamat'];
                 $telepon= $_POST['telepon'];

         
                 echo '<br>Nomor : ' . $no;
                 echo '<br>Nama Lengkap : ' . $nama;
                 echo '<br>Nama Email : ' . $email;
                 echo '<br>Alamat Lengkap : ' . $alamat;
                 echo '<br>Nomor Telepon : ' . $telepon;
                 

         
				?>

			</tbody>
		</table>
	</div>
</body>
</html>
