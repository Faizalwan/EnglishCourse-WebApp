<?php
    $koneksi = mysqli_connect("localhost","root","","kursus");
    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi Database Gagal :".mysqli_connect_error();
    }
?>