<?php session_start();
if(empty($_SESSION['access'])){
    echo "<script>alert('Belum Melakukan Login');
    location.href='SignIn.php'</script>";
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profile</title>
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
                    <li><a href="Confprofile.php">Profile</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <br><h1 align="center">Ubah Profile</h1><br><hr><br><br><br>
    </div>
    <div align="center">
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <pc lass="inline-block"> 
                <label for="name">Nama</label><br>
                <input type="text" name="name" placeholder="Masukkan Nama" id="name">
                <br><br>

                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender">
                    <option value=" - ">Pilih</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <br><br>

                <div>
                    <label for="pic">Upload Foto</label>
                    <input type="file" name="pic" id="pic">
                </div><br><br><br>

                <button type="submit">Kirim</button>
            </p>
        </form>
    </div>
</body>
</html>