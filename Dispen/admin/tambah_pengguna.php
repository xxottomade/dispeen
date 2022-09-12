<?php 

include 'fungsi.php';



if (isset($_POST["tambah"])) {
	if (registrasi ($_POST) > 0) {
		echo "
			<script>
				alert('Berhasil Ditambahkan');
				document.location.href = 'pengguna.php';
			</script>
		";
	} else {
		echo mysqli_error($koneksi);
	}
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>aaa</title>
 	<link rel="stylesheet" type="text/css" href="../assets/style.css">
 </head>
 <body>
 	<div class="box">
	<div class="box-header">
		Tambahkan Pengguna
	</div>
	<div class="box-body"> 
<form autocomplete="off" action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<label>Nama :</label>
	<input type="text" name="nama" placeholder="Masukkan Nama " class="input-control" required>
</div>
<div class="form-group">
	<label>Username :</label>
<input type="text" name="username" placeholder="Masukkan Username" class="input-control" required>
</div>
<div class="form-group">
	<label>Password :</label>
	<input type="text" name="password" placeholder="Password" class="input-control" required>			
</div>
<div class="form-group">
	<label>Level :</label>
<select name="level" class="input-control" required>
			<option value="Pilih">Pilih</option>
			<option value="Admin">Admin</option>
			<option value="User">User</option>
</select>
</div>
<input  style="margin-top: -15px" class="kumpul" type="submit" name="tambah" value="&#10133;Tambahkan">
</form>
</div>
</div>
 </body>

 </html>
