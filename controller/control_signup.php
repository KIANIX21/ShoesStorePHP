<?php
require_once "../controller/connection.php";

// prepare the call to the stored procedure
$stmt = mysqli_prepare($con, 'CALL create_user(?, ?, ?)');

// bind the parameters to the call
mysqli_stmt_bind_param($stmt, 'sss', $username, $password, $email);



// set the values of the parameters
$username = mysqli_escape_string($con, $_POST['username']);
$email = mysqli_escape_string($con, $_POST['email']);
$password = mysqli_escape_string($con, $_POST['password']);
$repassword = mysqli_escape_string($con, $_POST['repassword']);
try {
  // Melakukan validasi terhadap data
  if (empty($username)) {
    header("Location: ../view/signup.php?error=username cannot be empty!");
    die();
  }
  if (empty($password)) {
    header("Location: ../view/signup.php?error=password cannot be empty!");
    die();
  }
  if (empty($email)) {
    header("Location: ../view/signup.php?error=email cannot be empty!");
    die();
  }
  if (strlen($password) < 8) {
    header("Location: ../view/signup.php?error=Password must be at least 8 characters long!");
    die();
  }
  if ($password !== $repassword) {
    header("Location: ../view/signup.php?error=Password and repassword do not match!");
    die();
  }
  
  if (mysqli_stmt_execute($stmt)) {
    // success, redirect the user to a different page
    header('Location: ../view/login.php?create=Create Successfull');
    exit;
  } else {
    throw new Exception("Error executing statement");
  }
} catch (Exception $e) {
  // error, redirect the user to a different page
  header('Location: ../view/signup.php?error=Create Error');
  exit;
}

// close the statement
mysqli_stmt_close($stmt);

// close the connection
mysqli_close($con);
?>