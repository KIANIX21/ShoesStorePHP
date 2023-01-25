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
$id_prod = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM product WHERE id_prod = '$id_prod'";
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
                        <li class="breadcrumb-item active">Delete Data Product</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Delete Data Product
                        </div>
                        <div class="card-body">
                            <form action="../controller/control_delete.php" method="post">
                                <label for="id_prod">ID Produk:</label><br>
                                <input type="text" name="id_prod" id="id_prod" class="form-control" style="width: 100%;" required readonly value="<?php echo $data['id_prod'] ?>" readonly><br>
                                <label for="pr_name">Product Name:</label><br>
                                <input type="text" name="pr_name" id="pr_name" class="form-control" style="width: 100%;" required value="<?php echo $data['pr_name'] ?>" readonly><br>
                                <label for="size">Size:</label><br>
                                <input type="text" name="size" id="size" class="form-control" style="width: 100%;" required value="<?php echo $data['size'] ?>" readonly><br>
                                <label for="stock">Stock:</label><br>
                                <input type="number" name="stock" id="stock" min="0" class="form-control" style="width: 100%;" required value="<?php echo $data['stock'] ?>" readonly><br>
                                <label for="stock">Price:</label><br>
                                <input type="number" name="price" id="price" class="form-control" style="width: 100%;" required value="<?php echo $data['price'] ?>" readonly><br>
                                <input type="submit" value="Delete" class="btn btn-danger" name="submit">
                                <a href='dashboard.php' class="btn btn-primary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include '../include/footer.php'; ?>
        </div>
    </div>
<?php include '../include/script.php' ?>
</body>

</html>