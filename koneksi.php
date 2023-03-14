<?php
$koneksi = mysqli_connect("localhost","root","","laundry_rpl");
if (mysqli_connect_error()){
    echo "koneksi database gagal :" .mysqli_connect_error();
}
?>