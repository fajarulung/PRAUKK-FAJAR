<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pra ukk</title>
</head>
<body>
  <center>
  <h1>Toko Bangunan</h1>
  <h3><a href="tambah.php">Tambah data</a></h3>
  <table border="1">
    <tr>
      <th>Nama toko</th>
      <th>Alamat</th>
      <th>No Siup</th>
      <th>Nama Pemilik</th>
      <th>Nama Bahan</th>
      <th>Satuan</th>
      <th>Harga</th>
      <th>Aksi</th>
</tr>

<?php
include("koneksi.php");

$sql="SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan=tb_toko.id_bahan";
$query=mysqli_query($koneksi, $sql);
while($row=mysqli_fetch_array($query)){
  echo"<tr>";
  echo"<td>".$row['nama_toko']."</td>";
  echo"<td>".$row['alamat']."</td>";
  echo"<td>".$row['no_siup']."</td>";
  echo"<td>".$row['nama_pemilik']."</td>";
  echo"<td>".$row['nama_bahan']."</td>";
  echo"<td>".$row['satuan']."</td>";
  echo"<td>".$row['harga']."</td>";
  echo"<td>";
  echo"<a href='edit.php?id_bahan=".$row['id_bahan']."'>Edit | </a>";
  echo"<a href='hapus.php?id_bahan=".$row['id_bahan']."'>Hapus</a>";
  echo"</tr>";
}
?>
</table>
</center>
</body>
</html>