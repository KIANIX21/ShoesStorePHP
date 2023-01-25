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
    <?php include '../include/navbar.php' ?>
    <div id="layoutSidenav">
        <?php include '../include/side.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Show Data</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Show All Data Product
                        </div>
                        <?php
                        $ambilalert = isset($_GET['create']) ? $_GET['create'] : '';;
                        if ($ambilalert == "success") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Add Data Successfull!</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        } else if ($ambilalert == "error") {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Add Data Failed!</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        } else {
                            echo "";
                        };
                        ?>
                        <?php
                        $ambilalert = isset($_GET['update']) ? $_GET['update'] : '';;
                        if ($ambilalert == "success") {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>update Successfull!</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        } else if ($ambilalert == "error") {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>update  Failed!</strong>.
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
                                        <th>Id Admin</th>
                                        <th>product Name</th>
                                        <th>size</th>
                                        <th>Stock</th>
                                        <th>Gender</th>
                                        <th>Image</th>
                                        <th>Image</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../controller/connection.php';

                                    $productid = isset($_GET['id']) ? $_GET['id'] : '';
                                    // SQL query untuk menampilkan semua data dari tabel "product"
                                    $sql = "SELECT * FROM product WHERE id_prod = '$productid'";
                                    $result = mysqli_query($con, $sql);
                                    ?>
                                    <?php
                                    // Menampilkan data untuk setiap baris
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Ubah data gambar dari format BLOB ke base64
                                        $image = base64_encode($row['image']);
                                        $image1 = base64_encode($row['image_2']);
                                        $image2 = base64_encode($row['image_3']);
                                        // Tampilkan data di tabel
                                        echo "<tr>
                                            <td>" . $row["id_prod"] . "</td>
                                            <td>" . $row["id_ad"] . "</td>
                                            <td>" . $row["pr_name"] . "</td>
                                            <td>" . $row["size"] . "</td>
                                            <td>" . $row["stock"] . "</td>
                                            <td>" . $row["gender"] . "</td>
                                            <td><img src='data:image/png;base64," . $image . "' style= 'width: 200px; height: 200px;'></td>
                                            <td><img src='data:image/png;base64," . $image1 . "' style= 'width: 200px; height: 200px;'></td>
                                            <td><img src='data:image/png;base64," . $image2 . "' style= 'width: 200px; height: 200px;'></td>
                                            <td>" . $row["price"] . "</td>
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
<script>
    $(document).ready( function () {
      $('#datatablesSimple').DataTable({
        "destroy": true,
        "scrollX": true,
        "pagingType": "full_numbers"
      });
    });
  </script>
</body>
</html>