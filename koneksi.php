<?php
$koneksi = mysqli_connect("localhost", "root", "","gum");
// cek koneksi
if (!$koneksi){
die("Error koneksi: " . mysqli_connect_errno());
}
?>