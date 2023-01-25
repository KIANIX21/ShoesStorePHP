<?php
require '../controller/connection.php';

// Get the form data
$idadmin = isset($_POST['id_ad']) ? $_POST['id_ad'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

// Update the upcomingtrailers in the database
$sql = "UPDATE admins SET username_ad='$username', name_ad='$name', password_ad='$password', gender='$gender', email='$email', no_telp='$telp', address='$address' WHERE id_ad='$idadmin'";

if (mysqli_query($con, $sql)) {
  // Redirect to the show.php page with a success message
  header("Location: sh_ourteam.php?id=$idadmin&update=success");
} else {
  // Redirect to the show.php page with an error message
  header("Location: sh_ourteam.php?id=$idadmin&update=error");
}

// Close connection
mysqli_close($con);
?>