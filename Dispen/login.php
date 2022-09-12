<?php

include 'koneksi.php';
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$pass= $_POST['pass'];

		$cek = mysqli_query($koneksi, "SELECT * FROM data_admin WHERE username = '".$username."'AND password='".$pass."'");
		$data = mysqli_fetch_array($cek);
		$nama_pelogin = $data['nama'];
		$level_pelogin = $data['level'];
		if (mysqli_num_rows($cek) > 0) {
			if($level_pelogin =='User'){
				header('location:awal.php');
			}elseif($level_pelogin == 'Admin'){
				header('location:admin/pengguna.php');
			}	
			
		}else{
			echo 'gagal';
		}	
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body bgcolor="EAE3D2">
	<div class="box-login">
		<div class="header-box">Silahkan Login</div>
		<br><br>
		<form autocomplete="off" action="" method="POST">
			<div style="font-size: 18px; font-family: sans-serif; margin-left: 5px">
			Username :<br>
			</div>
			<center>
			<input type="username" name="username" /><br>
			</center>
			
			<div style="font-size: 18px; font-family: sans-serif; padding-right: 10px; margin-left: 5px">
			Password :<br>
			</div>
			<center>
			<input type="password" name="pass" /><br>
			<input style="font-size: 16px;" type="submit" name="login" value="Login" />
			</center>
		</form>
	</div>

</body>
</html>
<?php include 'footer.php'; ?>