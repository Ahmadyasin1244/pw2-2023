<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h2>Data Pendaftar</h2>
		 <table class="table">
			<thead>
				<tr>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			 <tbody>
				<tr>
 
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>

					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr> 


    <?php

	if (isset($_POST['nama_lengkap'])) {

        $nama_siswa = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

		echo '<tr>';
        echo '<td>' . $nama_siswa . '</td>';
        echo '<td>' . $email . '</td>';
        echo '<td>' . $alamat . '</td>';
        echo '<td>' . $telepon . '</td>';
		echo '</tr>';
	}
    ?>
            
			</tbody>
		</table>
	</div>
</body>
</html>