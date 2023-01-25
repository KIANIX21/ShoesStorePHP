<?php
require '../controller/connection.php';

// Get the form data
$id_prod = isset($_POST['id_prod']) ? $_POST['id_prod'] : '';
$pr_name = isset($_POST['pr_name']) ? $_POST['pr_name'] : '';
$size = isset($_POST['size']) ? $_POST['size'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';

// Update the upcomingtrailers in the database
$sql = "UPDATE product SET pr_name='$pr_name', size='$size', stock='$stock', categoryprice='$category', price='$price' WHERE id_prod='$id_prod'";

if (mysqli_query($con, $sql)) {
  // Redirect to the show.php page with a success message
  header("Location: show.php?id=$id_prod&update=success");
} else {
  // Redirect to the show.php page with an error message
  header("Location: show.php?id=$id_prod&update=error");
}

// Close connection
mysqli_close($con);
?>