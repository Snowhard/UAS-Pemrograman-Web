<?php
    session_start();
    include 'koneksi2.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="SignUp.css">
    <link rel="icon" href="source/icon.jpg">
    <script src="script.js"></script>
</head>
<body>
<?php
    //Session untuk login form
    if(isset($_SESSION['access'])){
        // header("location:portal.php");
        echo "<script>location.href='portal.php'</script>";
    }else{
        if(isset($_POST['proseslog'])){
            $user=$_POST['name'];
            $admin='Admin';
            $email=$_POST['email'];  
            $pass=$_POST['password'];

            if($email=='admin@gmail.com' && $pass=='admin'){
                $_SESSION['access']=$admin;
                echo "<script>location.href='portal.php'</script>";
                // header("location:portal.php");
            }else if($email=='admin' && $pass=='admin'){
                $_SESSION['access']=$admin;
                echo "<script>location.href='portal.php'</script>";
                // header("location:portal.php");
            }else{
                echo "<script>alert('Invalid email/password');
                window.location.href='SignIn.php'</script>";
            }
        }
    }
?>
    <!-- Membuat form login dengan menggunakan POST -->
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="container2">
            <h1>Masuk</h1>
            <hr>

            <label><b>Email</b></label>
            <input type="text" placeholder="Masukkan Email" name="email" required>    
              
            <label><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" required>

            <br><br><br>
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px;"> Ingat Saya
            </label>

            <div class="clearfix">
              <button type="submit" class="signupbtn" name="proseslog">Masuk</button>
              <a href="index.html"> <button type="button" class="cancelbtn">Kembali</button></a>
              Belum punya akun? <a href="SignUp.php">Daftar</a>
            </div>
        </div>
    </form>
</body>
</html>
