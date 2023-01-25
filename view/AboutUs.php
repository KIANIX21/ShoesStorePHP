<?php
include '../controller/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ShoesStore</title>
</head>
<body>
    <!----Header!---->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <a href="index.php" class="nav__logo">ShoesStore</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#AboutUs" class="nav__link active-link">About</a></li>
                    <li class="nav__item"><a href="product.php" class="nav__link ">Product</a></li>
                    <li class="nav__item"><a href="Contact.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav_shop">
                <a href="#" class="nav__icon">
                    <i class='bx bxs-user-circle' ></i>
                </a>
                <div class="nav__shop-content">
                    <div class="btn-signin">
                        <li><i class='bx bxs-log-in-circle' ><a href="login.php"> LOG IN</a></i></li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header -->
    <main class="l-main">
        <div style="background-color: #ABD9FF;">
        <section class="about section bd-container" id="about" >
            <span class="section-subtitle" style="font-size: 40px;">About us</span>
            <div class="about__container bd-grid">
                <div class="about__data">
                    <h2 class="section-title about__initial">We create the best local shoes</h2>
                    <p class="about__description">Shoes Store is a website that is engaged in the sale of shoes, which has several types of sneakers for: Kids Shoes, Women's Shoes and Men's Shoes. With the ShoesStore e-commerce website, it can help market their products using internet media so that they can bring in many customers and customers around the world can see and buy products without having to come directly to the store.</p>
                </div>
                <img src="images/aboutus.jpg" alt="" class="about__img">
            </div>
        </section>
    </div>
    <h1 class="home__title" style="text-align: center;">Our Team</h1>
    <?php
            $result = mysqli_query($con, 'SELECT * FROM admins WHERE id_ad = "ad2516"');
            $row = mysqli_fetch_assoc($result);
            $image = base64_encode($row['image_ad']);
            ?>
    <div class="products__container bd-grid slick_two">
        <div class="products__content">
            <img src="data:image/jpeg;base64,
                    <?php
                    echo $image;
                    ?>" alt="" class="product__img">
            <h3 class="products__name"><?php echo $row['name_ad'] ?></h3>
        </div>
        <?php
            $result = mysqli_query($con, 'SELECT * FROM admins WHERE id_ad = "ad2517"');
            $row = mysqli_fetch_assoc($result);
            $image = base64_encode($row['image_ad']);
            ?>
            <div class="products__content">
                <img src="data:image/jpeg;base64,
                    <?php
                    echo $image;
                    ?>" alt="" class="product__img">
                <h3 class="products__name"><?php echo $row['name_ad'] ?></h3>
            </div>

    </main>
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Shoes</a>
                <span class="footer__description">Store</span>
            <div>
                <a href="#" class="footer__social"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>
            <div class="footer__content">
                <h3 class="footer__title">AboutUs</h3>
                <p>Shoes Store is a website that is engaged in the sale of shoes, which has several types of sneakers for: Children's Shoes, Women's Shoes and Men's Shoes.</p>
            </div>
            <div class="footer__content">
                <h3 class="footer__title">Contact</h3>
                <p>If you want to buy shoes in our store, contact us and we will immediately serve you with service 24/7</p>
            </div>
            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Jl. Doang Jadian Kagak KM 12.8</li>
                    <li>Bogor 16913 - Indonesia</li>
                    <li>Phone : +62812xxxxx</li>
                    <li>Whatsapp : 08211xxxxx</li>
                </ul>
            </div>
        </div>
        <p class="footer__copy">&#169; 2022 Group 4. All right reserved</p>
    </footer>
    <script src="js/Main.js"></script>
</body>
</html>
