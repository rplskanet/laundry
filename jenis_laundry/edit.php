<?php
include "koneksi.php";
$id_jenislaundry=$_GET['id'];

$query=mysqli_query($koneksi,"select * from jenis_laundry where id_jenislaundry='$id_jenislaundry'");
$data=mysqli_fetch_array($query);

?>
<h4>Edit Data</h4>
<form action="?page=jenis_laundry/update" method="post">
    <input type="hidden" name="id_jenislaundry" value="<?= $data['id_jenislaundry'] ?>">
<table>
    <tr>
        <td>Nama</td>
        <td>: </td>
        <td><input type="text"class="form-control" name="nama_jenislaundry" value="<?= $data['nama_jenislaundry'] ?>"></td>
    </tr>
    <tr>
        <td>Tarif</td>
        <td>: </td>
        <td><input type="text"class="form-control" name="tarif" value="<?= $data['tarif']?>"></td>
    </tr>
</table>
<button class="btn btn-primary">Simpan</button>
</form>