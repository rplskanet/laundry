<?php
include "koneksi.php";

$id_jenislaundry=$_POST['id_jenislaundry'];
$nama_jenislaundry=$_POST['nama_jenislaundry'];
$tarif=$_POST['tarif'];

$query = mysqli_query($koneksi,"UPDATE jenis_laundry SET nama_jenislaundry='$nama_jenislaundry',tarif='$tarif' WHERE id_jenislaundry='$id_jenislaundry'");
header('location:?page=jenis_laundry/index');
?>