<?php
include '../controller/connection.php';
$sql = "SELECT * FROM product where gender = 'kids'";
$sql1 = "SELECT * FROM product where gender = 'woman'";
$sql2 = "SELECT * FROM product where gender = 'man'";
$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--css slick-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <title>ShoesStore</title>
</head>

<body>
    <!----Scroll Top!---->
    <a href="#" class="scrollTop" id="scroll-Top">
        <i class='bx bx-chevron-up scrollTop_icon'></i>
    </a>
    <!----Header!---->
    <header class="l-header" id="header">
    <nav class="nav bd-container">
      <div class="nav__toggle" id="nav-toggle">
        <i class='bx bx-menu'></i>
      </div>
      <a href="index.php" class="nav__logo">ShoesStore</a>
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item"><a href="home.php" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="AboutUs2.php" class="nav__link">About</a></li>
          <li class="nav__item"><a href="product2.php" class="nav__link">Product</a></li>
          <li class="nav__item"><a href="Contact2.php" class="nav__link">Contact</a></li>
        </ul>
      </div>
      <div class="nav_shop">
        <a href="#" class="nav__icon">
          <i class='bx bxs-user-circle'></i>
        </a>
        <div class="nav__shop-content">
          <div class="btn-signin">
            <li><i class='bx bxs-log-in-circle'><a href="login.php"> LOG OUT</a></i></li>
          </div>
        </div>
      </div>
    </nav>
  </header>
    <!-- HEADER -->
    <main class="l-main">
        <section class="product section bd-container" id="products">
            <span class="section-subtitle"></span>
            <h2 class="section-title">KIDS SHOES</h2>
            <a href="Sepatu Anak2.php"><button class="button" style="color: white;">See All</button></a>
            <div class="products__container bd-grid slick_two">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $productid = $row['id_prod'];
                $category = $row['categoryprice'];
                $name =  $row['pr_name'];
                $pr_image = $row['image'];
                $price = $row['price'];
                $image = base64_encode($row['image']);
                echo '<div class="products__content">
                    
                    <img src="data:image/jpeg;base64,' . $image . '"; alt="" class="product__img">
                    <h3 class="products__name">'. $name .'</h3>
                    <span class="products__detail">'. $category .'</span><br>
                    <span class="products__price">'. 'Rp.'. ' ' . number_format($price,0) .'</span>
                    <a href="show2.php?id=' . $productid .'" class="button products__button_detail">Product Detail</a>
                    <a href="#" class="button products__button"><i class="bx bx-cart-alt"></i></a>
                </div>';
            }      
            ?>      
        </section>
        <!-- sepatu anak -->

        <!-- sepatu wanita -->
        <section class="product section bd-container" id="products">
            <span class="section-subtitle"></span>
            <h2 class="section-title">WOMAN SHOES</h2>
            <a href="Sepatu Wanita2.php"><button class="button" style="color: white;">See All</button></a>
            <div class="products__container bd-grid slick_two">
            <?php
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $productid = $row1['id_prod'];
                $category = $row1['categoryprice'];
                $name =  $row1['pr_name'];
                $pr_image = $row1['image'];
                $price = $row1['price'];
                $image = base64_encode($row1['image']);
                echo '<div class="products__content">
                    <img src="data:image/jpeg;base64,'. $image.'"; alt="" class="product__img">
                    <h3 class="products__name">'. $row1['pr_name'] .'</h3>
                    <span class="products__detail">'. $row1['categoryprice'] .'</span><br>
                    <span class="products__price">'. 'Rp.'. ' ' . number_format($price,0) .'</span>
                    <a href="show2.php?id=' . $row1['id_prod'] .'" class="button products__button_detail">Product Detail</a>
                    <a href="#" class="button products__button"><i class="bx bx-cart-alt"></i></a>
                </div>';
            }
            ?>
        </section>
        <!-- sepatu wanita -->

        <!-- sepatu laki -->
        <section class="product section bd-container" id="products">
            <span class="section-subtitle"></span>
            <h2 class="section-title">MEN SHOES</h2>
            <a href="Sepatu Laki2.php"><button class="button" style="color: white;">See All</button></a>
            <div class="products__container bd-grid slick_two">
            <?php
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $productid = $row2['id_prod'];
                $category = $row2['categoryprice'];
                $name =  $row2['pr_name'];
                $pr_image = $row2['image'];
                $price = $row2['price'];
                $image = base64_encode($row2['image']);
                echo '<div class="products__content">
                    <img src="data:image/jpeg;base64,'. $image .'";alt="" class="product__img">
                    <h3 class="products__name">'. $row2['pr_name'] .'</h3>
                    <span class="products__detail">'. $row2['categoryprice'] .'</span><br>
                    <span class="products__price">'. 'Rp.'. ' ' . number_format($price,0) .'</span>
                    <a href="show2.php?id=' . $row2['id_prod'] .'" class="button products__button_detail">Product Detail</a>
                    <a href="#" class="button products__button"><i class="bx bx-cart-alt"></i></a>
                </div>';
            }
            ?>
        </section>
        <!-- sepatu laki -->
    </main>
    <!-- Footer -->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Shoes</a>
                <span class="footer__description">Store</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
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
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/Main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
        $('.slick_two').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            speed: 2000,
            autoplaySpeed: 2000,
            infinite: true,
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>