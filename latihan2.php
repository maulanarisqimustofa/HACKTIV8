<?php
include('koneksi.php'); 
$sql = "SELECT * FROM `data` as d inner join `job` as j on d.avail = j.job_id ";
$query = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_row($query)) {
    $name = $data[1];
    $role = $data[2];
    $avail = $data[3];
    $age = $data[4];
    $loc = $data[5];
    $years = $data[6];
    $email = $data[7];
    $job_id = $data[8];
    $job_name = $data[9];
}


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
            <h2 id="name"><?php echo $name; ?></h2>
            <p id="p1"><?php echo $role; ?></p>
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
                <p id="ava"> <?php echo $job_name; ?> </p>
                <p id="age"> <?php echo $age; ?> </p>
                <p id="loc"> <?php echo $loc; ?></p>
                <p id="expe"> <?php echo $years; ?> </p>
                <p id="email1"> <?php echo $email; ?></p>
            </div>
        </div>
        <br>
    </div>
    <br>
    <form action="proses.php" id="show" style="display: none;" method="POST">
        <label for="nama">Nama</label><br>
        <input type="text" placeholder="masukan nama anda" id="nama" name="nama" value="<?php echo $name; ?>"><br>
        <label for="role">Role</label><br>
        <input type="text" id="role" name="role" value="<?php echo $role; ?>"><br>
        <label for="avai">Availability</label><br>
        <select id="avai" name="avai">
            <option value="<?php echo $job_id; ?>"hidden><?php echo $job_name; ?></option>
            <?php
            $sql1 = "SELECT * FROM `job`";
            $query1 = mysqli_query($koneksi, $sql1);
            while ($data1 = mysqli_fetch_row($query1)) {
                $id = $data1[0];
                $job = $data1[1];
            ?>
            <option value="<?php echo $id; ?>"><?php echo $job; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="usia">Usia</label><br>
        <input type="number" id="usia" name="usia" value="<?php echo $age; ?>"><br>
        <label for="lokasi">Lokasi</label><br>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $loc; ?>"><br>
        <label for="tahun">Years Experience</label><br>
        <input type="number" id="tahun" name="tahun" value="<?php echo $years; ?>"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
        <button type="submit" class="block" id="submit" name="submit"> SUBMIT</button>
    </form>
    <script src="script.js"></script>
</body>

</html>