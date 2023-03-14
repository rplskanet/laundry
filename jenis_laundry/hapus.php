<?php
include "koneksi.php";
$id=$_GET['id'];
echo $id;
$query=mysqli_query($koneksi,"delete from jenis_laundry where id_jenislaundry='$id'");
header('location:?page=jenis_laundry/index');

?>