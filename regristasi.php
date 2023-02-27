<?php
require 'koneksi.php';
$yourname = $_POST["yourname"];
$youremail = $_POST["youremail"];
$password = $_POST["password"];
$repeatyourpassword = $_POST["repeatyourpassword"];

$query_sql = "INSERT INTO tbl_user (yourname, youremail, password, repeatyourpassword)
            VALUES ('$yourname', '$youremail', '$password', '$repeatyourpassword')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {    
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
