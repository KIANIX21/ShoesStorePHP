<?php 
require 'connection.php';

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT * FROM usert WHERE username = '$username' AND password_us = '$password'";
$result = mysqli_query($con, $sql);

if (empty($username)) {
    header("Location: ../view/login.php?error=username cannot be empty!");
    die();
  }
  if (empty($password)) {
    header("Location: ../view/login.php?error=password cannot be empty!");
    die();
  }
// Mengecek apakah username dan password yang dimasukkan sesuai dengan yang ada di database
if (mysqli_num_rows($result) == 1) {
    // Jika sesuai, maka user akan diarahkan ke halaman website
    header("Location: ../view/home.php?login=Login Berhasil");
} else {
    // Jika tidak sesuai, maka user akan diarahkan kembali ke halaman login
    header("Location: ../view/login.php?error=username atau password salah");
}
?>