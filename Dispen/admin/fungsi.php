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


function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM data_admin where id = $id");

	return mysqli_affected_rows($koneksi);
}

function registrasi($data){
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi,$data["password"]);
	$level = $data['level'];

	$result = mysqli_query($koneksi, "SELECT username FROM data_admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username Sudah Terdaftar, Silahkan Coba lagi.');
			</script>
		";
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($koneksi, "INSERT INTO data_admin values 
		('','nama','$username','$password','level')");


		return mysqli_affected_rows($koneksi);
}

 ?>