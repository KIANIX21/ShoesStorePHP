<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location: http://localhost:8012/project/model/loginadmin.php?pesan=belum_login");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../include/head.php'; ?>
<?php
include '../controller/connection.php';
// Get the id_prod from the URL query parameter
$admins = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM admins WHERE id_ad = '$admins'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>

<body class="sb-nav-fixed">
<?php include '../include/navbar.php' ?>
    <div id="layoutSidenav">
        <?php include '../include/side.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Product</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Update Data Product</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Update Data Product
                        </div>
                        <div class="card-body">
                        <form  action="../controller/control_ourteam.php" method="post" enctype="multipart/form-data">
                                <label for="id_prod">ID ADMIN:</label><br>
                                <input type="text" name="id_ad" id="id_ad" class="form-control" style="width: 100%;" required readonly  value="<?php echo $data['id_ad'] ?>"><br>
                                <label for="id_admin">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" style="width: 100%;" required value="<?php echo $data['username_ad'] ?>"><br>
                                <label for="pr_name">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control" style="width: 100%;" required value="<?php echo $data['name_ad'] ?>"><br>
                                <label for="size">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" style="width: 100%;" required value="<?php echo $data['password_ad'] ?>"><br>
                                <label for="stock">Email:</label><br>
                                <input type="text" name="email" id="email" min="0" class="form-control" style="width: 100%;" required value="<?php echo $data['email'] ?>"><br>
                                <label for="price">NoTelpon:</label><br>
                                <input type="number" name="notelp" id="notelp" class="form-control" style="width: 100%;" required value="<?php echo $data['no_telp'] ?>"><br>
                                <label for="image">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control" style="width: 100%;" required value="<?php echo $data['address'] ?>"><br><br>
                                <input type="submit" value="Update Data" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include '../include/footer.php'; ?>
        </div>
    </div>
<?php '../include/script.php' ?>
</body>
</html>