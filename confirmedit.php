<?php
require("koneksi.php");
require("user.php");
$user = new user();
 
if(isset($_POST['submit'])){
    $name = $_POST['nama'];
    $role = $_POST['role'];
    $avail = $_POST['avai'];
    $age = $_POST['usia'];
    $loc = $_POST['lokasi'];
    $years = $_POST['tahun'];
    $email = $_POST['email'];
    if(($name > 0) && ($role > 0) && ($avail > 0) && ($age > 0) && ($loc > 0) && ($years > 0) && ($email > 0)){
    $edit = $user->ubah($name, $role, $avail, $age, $loc, $years, $email);
    if($edit){
    header('Location:latihan2.php');
    }
}
}
?>
