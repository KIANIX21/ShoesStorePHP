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
$detailproduct = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM productdetail WHERE id_detail = '$detailproduct'";
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
                    <h1 class="mt-4">ProductDetail</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Update Data ProductDetail</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Update Data Product
                        </div>
                        <div class="card-body">
                        <form  action="../controller/control_upproductdetail.php" method="post" enctype="multipart/form-data">
                                <label for="id_prod">ID Product:</label><br>
                                <input type="text" name="id_prod" id="id_prod" class="form-control" style="width: 100%;" required readonly  value="<?php echo $data['id_prod'] ?>"><br>
                                <label for="rating">Rating:</label><br>
                                <input type="text" name="rating" id="rating" class="form-control" style="width: 100%;" required value="<?php echo $data['rating'] ?>"><br>
                                <label for="oldprice">Oldprice:</label><br>
                                <input type="number" name="oldprice" id="oldprice" class="form-control" style="width: 100%;" required value="<?php echo $data['oldprice'] ?>"><br>
                                <label for="newprice">Newprice:</label><br>
                                <input type="number" name="newprice" id="newprice" class="form-control" style="width: 100%;" required value="<?php echo $data['newprice'] ?>"><br>
                                <label for="color">Color:</label><br>
                                <input type="text" name="color" id="color" class="form-control" style="width: 100%;" required value="<?php echo $data['color'] ?>"><br>
                                <label for="avaible">avaible:</label><br>
                                <input type="text" name="avaible" id="avaible" class="form-control" style="width: 100%;" required value="<?php echo $data['avaible'] ?>"><br>
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