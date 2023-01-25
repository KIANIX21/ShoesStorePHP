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
                    <h1 class="mt-4">Product</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Add Data Product</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Create New Product
                        </div>
                        <div class="card-body">
                            <form onsubmit="return validateFile(event)" action="../controller/control_create.php" method="post" enctype="multipart/form-data">
                                <label for="id_prod">ID Produk:</label><br>
                                <input type="text" name="id_prod" id="id_prod" class="form-control" style="width: 100%;" required><br>
                                <label for="id_admin">ID Admin:</label><br>
                                <input type="text" name="id_ad" id="id_admin" class="form-control" style="width: 100%;" required><br>
                                <label for="pr_name">Product Name:</label><br>
                                <input type="text" name="pr_name" id="pr_name" class="form-control" style="width: 100%;" required><br>
                                <label for="size">Size:</label><br>
                                <input type="text" name="size" id="size" class="form-control" style="width: 100%;" required><br>
                                <label for="gender">Gender:</label><br>
                                <input type="radio" name="gender" id="gender" value="Kids" required>Kids
                                <input type="radio" name="gender" id="gender" value="Man" required>Man
                                <input type="radio" name="gender" id="gender" value="Woman" required>Woman<br>
                                <label for="stock">Stock:</label><br>
                                <input type="number" name="stock" id="stock" min="0" class="form-control" style="width: 100%;" required><br>
                                <label for="price">Price:</label><br>
                                <input type="number" name="price" id="price" class="form-control" style="width: 100%;" required><br>
                                <label for="image">Gambar:</label><br>
                                <input type="file" name="image" id="image-upload"><br><br>
                                <label for="image1">Gambar:</label><br>
                                <input type="file" name="image_2" id="image-upload"><br><br>
                                <label for="image2">Gambar:</label><br>
                                <input type="file" name="image_3" id="image-upload"><br><br>
                                <input type="submit" value="ADD Data" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include '../include/footer.php'; ?>
        </div>
    </div>
<?php include '../include/script.php' ?>
    <script>
        function validateFile(event) {
            // Get the file input element
            var input = document.getElementById('image-upload');

            // Check if the selected file is an image
            if (!input.files[0].type.startsWith('image/')) {
                alert('Please select an image file!!!');
                event.preventDefault();
                return false;
            }

            // Check if the selected file size is within the allowed limit
            const file = input.files[0];
            const fileSize = file.size; // Dapatkan ukuran file dalam byte

            if (fileSize > 500000) { // Jika ukuran lebih dari 500KB (500000 byte)
                // Gambar terlalu besar
                alert('Ukuran gambar terlalu besar. Mohon pilih gambar yang lebih kecil.');
                event.preventDefault();
                return false;
            }

            return true;
        }
    </script>
</body>

</html>