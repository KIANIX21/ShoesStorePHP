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
<?php include '../include/navbar.php'?>
    <div id="layoutSidenav">
    <?php include '../include/side.php'?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Show All ContactUs
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple"class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Password</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../controller/connection.php';


                                    // SQL query untuk menampilkan semua data dari tabel "product"
                                    $sql = "SELECT * FROM admins";
                                    $result = mysqli_query($con, $sql);
                                    ?>
                                    <?php
                                    // Menampilkan data untuk setiap baris
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Tampilkan data di tabel
                                        echo "<tr>
                                            <td>" . $row["username_ad"] . "</td>
                                            <td>" . $row["name_ad"] . "</td>
                                            <td>" . $row["password_ad"] . "</td>
                                            <td>" . $row["gender"] . "</td>
                                            <td>
                                                    <a href='sh_ourteam.php?id=" . $row["id_ad"] . "'><i class='fas fa-eye'></i></a>
                                                    <a href='up_ourteam.php?id=" . $row["id_ad"] . "'><i class='fas fa-edit'></i></a>
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