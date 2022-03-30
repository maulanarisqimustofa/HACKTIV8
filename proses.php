<?php  
include('koneksi.php'); 
if (isset($_POST['submit'])) {
$name = $_POST['nama']; 
$role = $_POST['role'];
$avai = $_POST['avai'];
$age = $_POST['usia'];
$loc = $_POST['lokasi'];
$years = $_POST['tahun'];
$email = $_POST['email'];


        $sql = "UPDATE `data` SET `name` = '$name', `role` = '$role', avail = '$avai', `age` = '$age', `loc` = '$loc', `years` = '$years', `email` = '$email' 
        WHERE id = 1"; 
        echo $sql;
        mysqli_query($koneksi,$sql); 
        if($sql){
            header("Location:latihan2.php");
        }
       
}

?> 