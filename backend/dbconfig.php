<?php
    $host = "192.168.1.14";
    $username = "root";
    $password = "";
    $database = "cms_tradeimex";
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>