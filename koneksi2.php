<?php
//koneksi
$koneksi = mysqli_connect('localhost','root','','db_tugas');
if($koneksi){
    echo "Koneksi host database berhasil";
 }else{
    echo "Koneksi host database gagal";
 }
?>