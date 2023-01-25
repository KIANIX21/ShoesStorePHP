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
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <!-- <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a> -->
        <a class="navbar-brand ps-3" href="../model/dashboard.php" class="nav__logo" style="text-align: center;">ShoesStore</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
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
                            <form action="../controller/control_update.php" method="post">
                                <label for="id_prod">ID Produk:</label><br>
                                <input type="text" name="id_prod" id="id_prod" class="form-control" style="width: 100%;" required readonly value="<?php echo $data['id_prod'] ?>"><br>
                                <label for="pr_name">Product Name:</label><br>
                                <input type="text" name="pr_name" id="pr_name" class="form-control" style="width: 100%;" required value="<?php echo $data['pr_name'] ?>"><br>
                                <label for="size">Size:</label><br>
                                <input type="text" name="size" id="size" class="form-control" style="width: 100%;" required value="<?php echo $data['size'] ?>"><br>
                                <label for="stock">Stock:</label><br>
                                <input type="number" name="stock" id="stock" min="0" class="form-control" style="width: 100%;" required value="<?php echo $data['stock'] ?>"><br>
                                <label for="category">category:</label><br>
                                <input type="text" name="category" id="category" class="form-control" style="width: 100%;" required value="<?php echo $data['categoryprice'] ?>"><br>
                                <label for="price">Price:</label><br>
                                <input type="number" name="price" id="price" class="form-control" style="width: 100%;" required value="<?php echo $data['price'] ?>"><br>
                                <input type="submit" value="Update Data" name="submit" class="btn btn-success">
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