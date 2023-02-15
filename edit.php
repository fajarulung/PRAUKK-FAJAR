<?php
include("koneksi.php");
if(!isset($_GET['id_bahan'])){
  header("location:tampil.php");
}
$id_bahan=$_GET['id_bahan'];
$sql="SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan=tb_toko.id_bahan 
WHERE tb_bahan.id_bahan='$id_bahan'";
$query=mysqli_query($koneksi, $sql);
$row=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edit</title>
</head>
<body>
  <h2>Edit data</h3>
  <table border="0">
    <form action="proses-edit.php" method="POST">
      <input type="hidden" name="id_bahan" value="<?php echo $row['id_bahan']?>"/>
      <tr>
        <td><label for="nama_bahan">Nama bahan : </label></td>
        <td><input type="text" name="nama_bahan" value="<?php echo $row['nama_bahan']?>"/></td>
</tr>

<tr>
  <td><label for="satuan">Satuan : </label></td>
  <td><input type="number" name="satuan" value="<?php echo $row['satuan']?>"/></td>
</tr>

<tr>
  <td><label for="harga">Harga : </label></td>
  <td><input type="text" name="harga" value="<?php echo $row['harga']?>"/></td>
</tr>

<tr>
  <td><label for="nama_toko">Nama toko : </label></td>
  <td><input type="text" name="nama_toko" value="<?php echo $row['nama_toko']?>"/></td>
</tr>

<tr>
  <td><label for="alamat">Alamat : </label></td>
  <td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"/></td>
</tr>

<tr>
  <td><label for="no_siup">No SIUP : </label></td>
  <td><input type="text" name="no_siup" value="<?php echo $row['no_siup']?>"/></td>
</tr>

<tr>
  <td><label for="nama_pemilik">Nama Pemilik : </label></td>
  <td><input type="text" name="nama_pemilik" value="<?php echo $row['nama_pemilik']?>"/></td>
</tr>

<table>
  <td><input type="submit" name="edit" value="edit data"></td>

</form>
</table>
</body>
</html>