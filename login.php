<?php
require 'koneksi.php';
$yourname = $_POST["yourname"];
$password = $_POST["password"];
if(!isset($_POST['submit'])){
$query_sql = "SELECT * FROM tbl_user
            WHERE yourname = '$yourname' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);
if (mysqli_num_rows($result) > 0) {
    header("location: wisata.html");
} else {
    echo "<center><h1>Your Name Or Password invalid. Silahkan Coba Login Kembali.<h1>
            <button><strong><a href='login.html'>Login</a></strong><botton></center>";
}
}