<?php session_start();
if(empty($_SESSION['access'])){
    echo "<script>alert('Belum Melakukan Login');
    location.href='SignIn.php'</script>";
} 

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $picture = "default.png";

    $namaFoto = $_FILES['pic']['name'];
    $Foto = $_FILES['pic']['error'];
    $tmpName = $_FILES['pic']['tmp_name'];

    if($Foto == 0){
        move_uploaded_file($tmpName, 'img/profilepic.jpg');
        $picture = "profilepic.jpg";
    } else if($Foto == 1){
        $picture;    
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="Style2.css">
    <link rel="icon" href="icon.jpg">
    <script src="script.js"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="guitar"><img src="G-BOX logo.png" alt="logo" height="80" width="80"></div>
            <div class="logo"><a href='index.html'>G-BOX</a></div>
            <div class="menu">
                <ul>
                    <li><a href="Profile.php">Profile</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <br><h1 align="center">Profile</h1><br><hr>
    </div>
    <div>
        <ul class="tampilan-nama">
            <li align="center"><img src="img/<?= $picture ?>" alt="<? $namaFoto?>" width="160px"></li><br>
            <li>Nama : <?= $name; ?></li>
            <li>Jenis Kelamin : <?= $gender; ?></li>
        </ul><br><br><br>
        <div align="center">
            <a href="Confprofile.php"><button>Ubah</button></a>
            <a href="SignIn.php"><button>Kembali</button></a>
        </div>
    </div>
</body>
</html>