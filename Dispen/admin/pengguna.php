<?php 
//kita koneksikan file tampil dengan file function
include'fungsi.php';

//ini mengambil data dari tabel karyawan
$ambil=query("SELECT * FROM data_admin");


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>turu</title>
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body bgcolor="EAE3D2">
    <div class="box">
        <a class="keluar" href="logout.php"><h3>Keluar</h3>
      <div class="box-header">
        Tabel Informasi
      </div>
      <div class="box-body">
         <a href="tambah_pengguna.php">
    <input class="kumpul" type="submit" name="submit" value="&#10133;Tambahkan Data">
  </a>
  <table>
    <tr>
      <th style="text-align: center;">No</th>
      <th style="text-align: center;">Username</th>
      <th style="text-align: center;">Level</th>
      <th style="text-align: center;">Edit</th>
    </tr>

     <?php $i=1; ?>
    <?php foreach ($ambil as $row):?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["level"]; ?></td>
        <td>
          <center>
        <button>
           <a class="tombol2"href="hapus.php?id=<?php echo $row["id"]?>" onclick = "return confirm('anda yakin menghapus data ini?');"> Hapus</a>
           </center>
        </td>
      </tr>

      <?php $i++; ?>
    <?php endforeach; ?> 
  </table>
        </div>
</div>

</body>
</html>