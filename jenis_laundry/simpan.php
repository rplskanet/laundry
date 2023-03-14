<?php
include "koneksi.php";
$nama_jenislaundry=$_POST['nama_jenislaundry'];
$tarif=$_POST['tarif']; 
ECHO $tarif;
$query=mysqli_query($koneksi,"insert into jenis_laundry(nama_jenislaundry,tarif)values('$nama_jenislaundry','$tarif')");
header('location:?page=jenis_laundry/index');
?>