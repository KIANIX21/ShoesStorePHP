<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location: http://localhost:8012/project/model/loginadmin.php?pesan=belum_login");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include '../include/head.php'; ?>

<body class="sb-nav-fixed">
    <?php include '../include/navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include '../include/side.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Product</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Information
                        </li>
                    </ol>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            <a href="Create.php" style="text-decoration: none;" class="btn btn-primary">Create</a>
                        </li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Product
                        </div>
                        <?php
                        $ambilalert = isset($_GET['delete']) ? $_GET['delete'] : '';;
                        if ($ambilalert == "success") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Delete Successfull!</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        } else if ($ambilalert == "error") {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Delete Failed!</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        } else {
                            echo "";
                        };
                        ?>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Product</th>
                                        <th>product Name</th>
                                        <th>size</th>
                                        <th>Stock</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../controller/connection.php';
                                    // SQL query untuk menampilkan semua data dari tabel "product"
                                    $sql = "SELECT * FROM product";
                                    $result = mysqli_query($con, $sql);
                                    ?>
                                    <?php
                                    // Menampilkan data untuk setiap baris
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Tampilkan data di tabel
                                        echo "<tr>
                                            <td>" . $row["id_prod"] . "</td>
                                            <td>" . $row["pr_name"] . "</td>
                                            <td>" . $row["size"] . "</td>
                                            <td>" . $row["stock"] . "</td>
                                            <td>" . $row["gender"] . "</td>
                                            <td>
                                                    <a href='../controller/show.php?id=" . $row["id_prod"] . "'><i class='fas fa-eye'></i></a>
                                                    <a href='update.php?id=" . $row["id_prod"] . "'><i class='fas fa-edit'></i></a>  
                                                    <a href='delete.php?id=" . $row["id_prod"] . "'><i class='fas fa-trash'></i></a>
                                            </td>
                                            </tr>";
                                    }
                                    // Menutup koneksi
                                    mysqli_close($con);
                                    ?>
                                </tbody>
                            </table>
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