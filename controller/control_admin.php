<?php
session_start();

require_once "../controller/connection.php";

$username = mysqli_real_escape_string($con, $_POST["username"]);
$password = md5(mysqli_real_escape_string($con, $_POST["password"]));

$data = mysqli_query($con,"SELECT * FROM admins where username_ad='$username' and password_ad='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../model/dashboard.php");
}else{
    header("location: ../model/loginadmin.php?pesan=gagal");
}
?>