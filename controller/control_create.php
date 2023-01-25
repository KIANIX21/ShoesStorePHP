<?php
require '../controller/connection.php';

// Get the form data
$id_prod = mysqli_real_escape_string($con, $_POST['id_prod']);
$id_admin = mysqli_real_escape_string($con, $_POST['id_ad']);
$pr_name = mysqli_real_escape_string($con, $_POST['pr_name']);
$size = mysqli_real_escape_string($con, $_POST['size']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$stock = mysqli_real_escape_string($con, $_POST['stock']);
$price = mysqli_real_escape_string($con, $_POST['price']);
// Check if file is an image
$image_info = getimagesize($_FILES['image']['tmp_name']);
if ($image_info !== false) {
    // File is an image
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image1 = addslashes(file_get_contents($_FILES['image_2']['tmp_name']));
    $image2 = addslashes(file_get_contents($_FILES['image_3']['tmp_name']));
    // Insert product into database
    $sql = "INSERT INTO product (id_prod, id_ad, pr_name, size, gender, stock, price, image, image_2, image_3) 
            VALUES ('$id_prod', '$id_admin', '$pr_name', '$size', '$gender', '$stock', '$price', '$image', '$image1', '$image2')";
} else {
    // File is not an image
    $msg = "The file you uploaded is not a valid image";
}

if (mysqli_query($con, $sql)) {
    // Redirect to the show.php page with a success message
    header("Location: show.php?id=$id_prod&create=success");
  } else {
    // Redirect to the show.php page with an error message
    header("Location: show.php?id=$id_prod&create=error");
  }
  
  // Close connection
  mysqli_close($con);
  ?>