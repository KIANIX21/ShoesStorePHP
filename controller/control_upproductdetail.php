<?php
require '../controller/connection.php';

// Get the form data
$detailproduct = isset($_POST['id_detail']) ? $_POST['id_detail'] : '';
$rating = isset($_POST['rating']) ? $_POST['rating'] : '';
$oldprice = isset($_POST['oldprice']) ? $_POST['oldprice'] : '';
$newprice = isset($_POST['newprice']) ? $_POST['newprice'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';
$avaible = isset($_POST['avaible']) ? $_POST['avaible'] : '';


// Update the upcomingtrailers in the database
$sql = "UPDATE productdetail SET rating='$rating', oldprice='$oldprice', newprice='$newprice', color='$color', avaible='$avaible'WHERE id_detail='$detailproduct'";

if (mysqli_query($con, $sql)) {
  // Redirect to the show.php page with a success message
  header("Location: sh_productdetail.php?id=$detailproduct&update=success");
} else {
  // Redirect to the show.php page with an error message
  header("Location: sh_productdetail.php?id=$detailproduct&update=error");
}

// Close connection
mysqli_close($con);
?>