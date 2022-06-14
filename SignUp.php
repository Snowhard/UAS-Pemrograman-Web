<?php
  session_start();
  include 'koneksi2.php';
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="SignUp.css">
  <link rel="icon" href="icon.jpg">
  <script src="script.js"></script>
</head>
<body>
  <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <div class="container">
      <h1>Daftar</h1>
      <hr>
      <div>
        <label for="name"><b>Nama</b></label>
        <input type="text" placeholder="Masukkan Nama" name="name" required>
      </div>
      <div>
        <label for="number"><b>Nomor Telepon</b></label>
        <input type="text" placeholder="Masukkan Nomor Telepon" name="number" required>
      </div>
      <div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Masukkan Email" name="email" required>    
      </div>  
      <div>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="psw" required>
      </div>
      <div>
        <label for="ulangi-psw"><b>Ulangi Password</b></label>
        <input type="password" placeholder="Masukkan Ulang Password" name="ulangi-psw" required>
      </div>
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px;"> Ingat Saya
      </label>
      <div class="clearfix">
        <a href="index.html"><button type="button" class="cancelbtn">Kembali</button></a>
        <a href="portal.php"><button type="submit" class="signupbtn">Daftar</button></a>
        Sudah punya akun? <a href="SignIn.php">Masuk</a>
      </div>
    </div>
  </form>
</body>
</html>