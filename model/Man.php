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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Man Table Example
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Product</th>
                                        <th>product Name</th>
                                        <th>size</th>
                                        <th>Stock</th>
                                        <th>Gender</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../controller/connection.php';
                                    // SQL query untuk menampilkan semua data dari tabel "admin"
                                    $sql = "SELECT * FROM product where gender like 'Man'" ;
                                    $result = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // Menampilkan data untuk setiap baris
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Ubah data gambar dari format BLOB ke base64
                                            $gambar_base64 = base64_encode($row['image']);

                                            // Tampilkan data di tabel
                                            echo "<tr>
                                            <td>" . $row["id_prod"] . "</td>
                                            <td>" . $row["pr_name"] . "</td>
                                            <td>" . $row["size"] . "</td>
                                            <td>" . $row["stock"] . "</td>
                                            <td>" . $row["gender"] . "</td>
                                            <td><img src='data:image/png;base64," . $gambar_base64 . "' style= 'width: 200px; height: 200px;'></td>
                                            <td>" . $row["price"] . "</td>
                                            </tr>";
                                            }
                                        } else {
                                            echo "Tidak ada data yang ditemukan";
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