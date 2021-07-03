<?php 

    session_start();
    $conn = mysqli_connect("localhost","root","","kenaikan_new");

    // CHECK CONNECTION
    if (mysqli_connect_errno()) {
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }

?>