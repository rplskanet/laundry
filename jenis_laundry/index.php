<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Laundry</title>
</head>

<body>
    <a href="?page=jenis_laundry/tambah">Tambah</a>
    <table class="table table-dark">
        <tr>
            <th>Id Jenis Laundry</th>
            <th>Nama Jenis Laundry</th>
            <th>Tarif</th>
            <th>Aksi</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM jenis_laundry");
        $i = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>

            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $data['nama_jenislaundry'] ?></td>
                <td><?php echo $data['tarif'] ?></td>
                <td>
                    <a href="?page=jenis_laundry/hapus&id=<?php echo $data['id_jenislaundry'] ?>">Hapus</a>
                    <a href="?page=jenis_laundry/edit&id=<?php echo $data['id_jenislaundry'] ?>">Edit</a>
                </td>
            </tr>

        <?php } ?> 
    </table>
</body>

</html>