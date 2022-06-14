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
    <title>G-BOX</title>
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
                    <li><a href="#pengumuman">Pengumuman</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                    <li><a href="#kursus">Kursus</a></li>
                    <li><a href="Confprofile.php">Profile</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <input type="search" placeholder="Cari..">
        <h2>Selamat Datang, <?php echo $_SESSION['access']; ?>!</h2>
        <div class="alert-box">
            <span class="badge">Pengumuman: </span><br>

            <div class="pengumuman">
                <ul>
                    <li>Belum ada pengumuman</li>
                    <li></li>
                </ul>
            </div>
        </div>   
        <div class="alert-box">
            <span class="badge">Jadwal: </span>
            <div class="jadwal">
                <ul>
                    <li>Belum ada jadwal</li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="alert-box">
            <span class="badge">Kursus: </span>
            <div class="jadwal">
                <ul>
                    <li>Belum ada Kursus</li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>