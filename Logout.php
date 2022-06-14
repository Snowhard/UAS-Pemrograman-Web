<?php
session_start(); 
session_destroy();
echo "<script>location.replace('SignIn.php');</script>";
// header("location:index.php");
?>