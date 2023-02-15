<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data</title>
</head>
<body>
  <h2>Form tambah data</h2>
 <form action="proses-tambah.php" method="POST">
  <table border="0">
    <tr>
      <td><label for="nama_bahan">Nama Bahan : </td>
      <td><input type="text" name="nama_bahan"/></td>
</tr>

<tr>
<td><label for="satuan">Satuan : </td>
<td><input type="number" name="satuan"/></td>
</tr>

<tr>
  <td><label for="harga">Harga : </td>
  <td><input type="text" name="harga"/></td>
</tr>

<tr>
  <td><label for="nama_toko">Nama Toko : </td>
  <td><input type="text" name="nama_toko"/></td>
</tr>

<tr>
  <td><label for="alamat">Alamat : </td>
  <td><input type="text" name="alamat"/></td>
</tr>

<tr>
  <td><label for="no_siup">No SIUP : </td>
  <td><input type="text" name="no_siup"/></td>
</tr>

<tr>
  <td><label for="nama_pemilik">Nama Pemilik : </td>
  <td><input type="text" name="nama_pemilik"/></td>
</tr>

<table>
  <p><input type="submit" value="kirim data" name="kirim"/></p>
</table>
</table>
</body>
</html>