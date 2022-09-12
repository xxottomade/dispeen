
<?php 

$koneksi=mysqli_connect("localhost","root","","db_dispen");

function query($query){
	global $koneksi;
	$ambil=mysqli_query($koneksi, $query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}

	return $rows;
}

//buat fungsi simpan
function simpan($data){
	global $koneksi;

	$nisn = htmlspecialchars($data["nisn"]);
	$nama = htmlspecialchars($data["nama"]);
	$asko = htmlspecialchars($data["asko"]);
	$ortu = htmlspecialchars($data["ortu"]);
	$ket = htmlspecialchars($data["ket"]);

	$query = "INSERT INTO data_siswa
	values 
	('','$nisn','$nama','$asko','$ortu','$ket')";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}



function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM data_siswa where id = $id");

	return mysqli_affected_rows($koneksi);
}

 function ubah($data){

	global $koneksi;

	$id = $data["id"];
	$nisn = htmlspecialchars($data["nisn"]);
	$nama = htmlspecialchars($data["nama"]);
	$asko = htmlspecialchars($data["asko"]);
	$ortu = htmlspecialchars($data["ortu"]);
	$ket = htmlspecialchars($data["ket"]);

	$query = "UPDATE data_siswa SET
	nisn = '$nisn',
	nama = '$nama',
	asko = '$asko',
	ortu = '$ortu',
	ket = '$ket'

	WHERE id = $id
	";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function registrasi($data){
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi,$data["password"]);
	$password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

	$result = mysqli_query($koneksi, "SELECT username FROM data_admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username Sudah Terdaftar, Silahkan Coba lagi.');
			</script>
		";
		return false;
	}

	if ($password !== $password2) {
		echo "
			<script>
				alert('Konfirmasi password tidak sesuai, Silahkan Coba lagi');
			</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($koneksi, "INSERT INTO data_admin values 
		('','$username','$password')");


		return mysqli_affected_rows($koneksi);
}



 ?>
