<?php
$koneksi = mysqli_connect("localhost","root","","laundry");
if (mysqli_connect_error()){
    echo "koneksi database gagal :" .mysqli_connect_error();
}
?>