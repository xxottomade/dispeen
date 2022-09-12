<?php 
//kita koneksikan file tampil dengan file function
include'fungsi.php';

$ambil=query("SELECT * FROM data_siswa");


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>depan</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css">
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
  <div class="container">
    <div class="box">
       <a class="keluar" href="logout.php"><h3>Keluar</h3></a>
      <div class="box-header">
        Tabel Keterangan Siswa Berhenti Sekolah
      </div>
      <div class="box-body">
         <a href="tambah_data.php">
    <input class="kumpul" type="submit" name="submit" value="&#10133;Tambahkan Siswa">
  </a>
  <table>
    <tr>
      <th style="width: 5%;text-align: center;">No</th>
      <th style="width: 8%;text-align: center;">NISN</th>
      <th style="width: 12%;text-align: center;">Nama</th>
      <th style="width: 12%;text-align: center;">Asal Sekolah</th>
      <th style="width: 15%;text-align: center;">Nama Orang Tua/Wali</th>
      <th style="width: 20%;text-align: center;">Keterangan</th>
      <th style="width: 6%;text-align: center;">Edit</th>
    </tr>

     <?php $i=1; ?>
    <?php foreach ($ambil as $row):?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["nisn"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["asko"]; ?></td>
        <td><?php echo $row["ortu"]; ?></td>
        <td><?php echo $row["ket"]; ?></td>
        <td>
          <center>
         <button> <a class="tombol"href="edit.php?id= <?php echo $row["id"] ?>"visited>Edit</a><button><a href="hapus.php?id=<?php echo $row["id"]?>" onclick = "return confirm('anda yakin menghapus data ini?');"> Hapus</a>
           </center>
        </td>
      </tr>

      <?php $i++; ?>
    <?php endforeach; ?> 
  </table>
        </div>
</div>
</div>
</body>
</html>
<?php include 'footer.php'; ?>
