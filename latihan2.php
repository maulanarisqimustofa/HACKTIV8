<?php
require("koneksi.php");
require("user.php");

$user = new user();
$data_user = $user->tampil();
$data = $user->tampil_1();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="nav" id="myTopnav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Inventory</a></li>
        </ul>
    </div>
    <br>
    <div class="bio">
        <img src="user.png" alt="">
        <div class="detail1">
            <h2 id="name"><?php echo  $data_user['name'] ?></h2>
            <p id="p1"><?php echo  $data_user['role'] ?></p>
            <input type="button" id="edit" value="Edit" onclick="press()">
            <input type="button" id="resume" value="Resume">
        </div>
        <div class="general">
            <div class="detail2">
                <p>Availability </p>
                <p>Usia </p>
                <p>Lokasi</p>
                <p>Pengalaman</p>
                <p>Email </p>
            </div>
            <div class="detail3">
                <p id="ava"> <?php echo  $data_user['job_name'] ?> </p>
                <p id="age"> <?php echo  $data_user['age'] ?> </p>
                <p id="loc"> <?php echo  $data_user['loc'] ?></p>
                <p id="expe"> <?php echo  $data_user['years'] ?> </p>
                <p id="email1"> <?php echo  $data_user['email'] ?></p>
            </div>
        </div>
        <br>
    </div>
    <br>
    <form action="confirmedit.php" id="show" style="display: none;" method="POST">
        <label for="nama">Nama</label><br>
        <input type="text" placeholder="masukan nama anda" id="nama" name="nama" value="<?php echo $data_user['name'] ?>"><br>
        <label for="role">Role</label><br>
        <input type="text" id="role" name="role" value="<?php echo $data_user['role'] ?>"><br>
        <label for="avai">Availability</label><br>
        <select id="avai" name="avai">
        <option hidden value="<?php echo $data_user['job_id']; ?>" /><?php echo $data_user['job_name']; ?></option>
            <option value="">Pilih</option>
            <?php foreach ($data as $row) { ?>
                <option value="<?php echo $row['job_id']; ?>" ><?php echo $row['job_name']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="usia">Usia</label><br>
        <input type="number" id="usia" name="usia" value="<?php echo $data_user['age'] ?>"><br>
        <label for="lokasi">Lokasi</label><br>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $data_user['loc'] ?>"><br>
        <label for="tahun">Years Experience</label><br>
        <input type="number" id="tahun" name="tahun" value="<?php echo $data_user['years'] ?>"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $data_user['email'] ?>"><br><br>
        <button type="submit" class="block" id="submit" name="submit"> SUBMIT</button>
    </form>
    <script src="script.js"></script>
</body>

</html>