<?php
 include 'fungsi.php'; 
 if (isset($_POST["tambah"])) {
	if (simpan ($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'awal.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal ditambahkan');
			document.location.href = 'tambah_data.php';
		</script>

		";
	}
}
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>aaa</title>
 	<link rel="stylesheet" type="text/css" href="assets/style.css">
 </head>
 <body>
 	<div class="container">
 	<div class="box">
	<div class="box-header">
		Tambahkan Siswa
	</div>
	<div class="box-body"> 
<form autocomplete="off" action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<label>NISN :</label>
	<input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="input-control" required>
</div>
<div class="form-group">
	<label>Nama :</label>
<input type="text" name="nama" placeholder="Masukkan Nama" class="input-control" required>
</div>
<div class="form-group">
	<label>Asal Sekolah :</label>
<input type="text" name="asko" placeholder="Masukkan Asal Sekolah" class="input-control" required>
</div>
<div class="form-group">
	<label>Nama Orang Tua/Wali :</label>
<input type="text" name="ortu" placeholder="Masukkan Nama Orang tua/Wali" class="input-control" required>
</div>
<div class="form-group">
	<label>Keterangan :</label>
<textarea name="ket" placeholder="Masukkan Keterangan" class="input-control" required></textarea>
</div>
<input  style="margin-top: -15px" class="kumpul" type="submit" name="tambah" value="&#10133;Tambahkan Data">
</form>
</div>
</div>
</div>
 </body>

 </html>
<?php include 'footer.php'; ?>