<?php
require_once "../controller/connection.php";

// prepare the call to the stored procedure
$stmt = mysqli_prepare($con, 'CALL create_contact(?, ?, ?, ?)');

// bind the parameters to the call
mysqli_stmt_bind_param($stmt, 'ssss', $name, $phone, $city, $message);



// set the values of the parameters
$name = mysqli_escape_string($con, $_POST['name']);
$phone = mysqli_escape_string($con, $_POST['phone']);
$city = mysqli_escape_string($con, $_POST['city']);
$message = mysqli_escape_string($con, $_POST['message']);
try {
  // Melakukan validasi terhadap data
  if (empty($name)) {
    header("Location: ../view/Contact.php?error=name cannot be empty!");
    die();
  }
  if (empty($phone)) {
    header("Location: ../view/Contact.php?error=phone cannot be empty!");
    die();
  }
  if (empty($city)) {
    header("Location: ../view/Contact.php?error=city cannot be empty!");
    die();
  }
  if (empty($message)) {
    header("Location: ../view/Contact.php?error=message cannot be empty! ");
    die();
  }

  if (mysqli_stmt_execute($stmt)) {
    // success, redirect the user to a different page
    header('Location: ../view/Contact.php?Contact=Successfull');
    exit;
  } else {
    throw new Exception("Error executing statement");
  }
} catch (Exception $e) {
  // error, redirect the user to a different page
  header('Location: ../view/Contact.php?error=Sent Error');
  exit;
}

// close the statement
mysqli_stmt_close($stmt);

// close the connection
mysqli_close($con);
?>