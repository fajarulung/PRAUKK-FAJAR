<?php
include("koneksi.php");

$id_bahan=$_GET['id_bahan'];

$sql="DELETE FROM tb_bahan where id_bahan='$id_bahan'";
$query=mysqli_query($koneksi,$sql);

$sql="DELETE FROM tb_bahan where id_bahan='$id_bahan'";
$query=mysqli_query($koneksi,$sql);

  header("Location:tampil.php?status=sukses");

?>