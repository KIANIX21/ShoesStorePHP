<?php
require '../controller/connection.php';

// Get the id from the URL
$id =  mysqli_escape_string($con, $_POST['id_prod']) ;

// Delete the record
$sql = "DELETE FROM product WHERE id_prod='$id'";

if (mysqli_query($con, $sql)) {
  // Redirect to the list.php page with a success message
  header("Location: ../model/dashboard.php?delete=success");
} else {
  // Redirect to the list.php page with an error message
  header("Location: ../model/dashboard.php?delete=error");
}

// Close connection
mysqli_close($con);
?>