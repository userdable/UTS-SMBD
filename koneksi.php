<?php
    $konek = mysqli_connect("localhost","root","","register");

    if (mysqli_connect_errno()) {
        echo "Gagal terhubung ke server: " . mysqli_connect_error();
        exit();
        }
?>