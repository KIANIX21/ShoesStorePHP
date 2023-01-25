<?php 
include '../controller/connection.php';

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
    <!--CSS SLICK-->
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

    <main class="l-main">
        <!----Home---->
        <section class="home" id="home" style="background-color: #ABD9FF;">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="home__container bd-container bd-grid">
                    <?php
                        $result = mysqli_query($con, 'SELECT pr_name, image FROM product WHERE id_prod = "pr242152"');
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <div class="home__data">
                            <h1 class="home__title"><?php echo $row['pr_name'] ?></h1>
                            <h2 class="home__subtitle">Black Aldas shoes are special shoes for Kids</h2>
                        </div>
                        <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="home__container bd-container bd-grid">
                        <?php 
                        $result = mysqli_query($con, 'SELECT pr_name, image FROM product WHERE id_prod = "pr242171"');
                        $row = mysqli_fetch_assoc($result); 
                        ?>
                        <div class="home__data">
                            <h1 class="home__title"><?php echo $row['pr_name'] ?></h1>
                            <h2 class="home__subtitle">Black and White Stake Shoes Are Special Shoes For Men</h2>
                        </div>
                        <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    </div>
                </div>

                <div class="mySlides fade">
                    <?php 
                    $result = mysqli_query($con, 'SELECT pr_name, image FROM product WHERE id_prod = "pr242166"');
                    $row = mysqli_fetch_assoc($result); 
                    ?>
                    <div class="home__container bd-container bd-grid">
                        <div class="home__data">
                            <h1 class="home__title"><?php echo $row['pr_name'] ?></h1>
                            <h2 class="home__subtitle">Lsp 1903 Rainbow Shoes Are Special Shoes For Women</h2>
                        </div>
                        <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    </div>
                </div>

            </div>
        </section>
        <!--Next and Previous button-->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <!--dot circle-->
        <div style="text-align:center;">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
        </div>
        <!----About---->
        <section class="about section bd-container" id="about">
            <span class="section-subtitle" style="font-size: 30px;">About us</span>
            <div class="about__container bd-grid">
                <div class="about__data">
                    <h2 class="section-title about__initial">We create the best local shoes</h2>
                    <p class="about__description">Shoes Store is a website that is engaged in the sale of shoes, which has several types of sneakers for: Children's Shoes, Women's Shoes and Men's Shoes. With the ShoesStore e-commerce website, it can help market their products using internet media so that they can bring in many customers and customers around the world can see and buy products without having to come directly to the store.</p>
                    <a href="AboutUs2.php" class="button">Explore history</a>
                </div>
                <img src="images/aboutus.jpg" alt="" class="about__img">
            </div>
        </section>

        <!----Service---->
        <div style="background-color: #ABD9FF;">
            <section class="services section bd-container" id="services">
                <span class="section-subtitle" style="font-size: 30px;">Services</span>
                <h2 class="section-title">Our Amazing Services</h2>
                <div class="services__container bd-grid">
                    <div class="services__content">
                        <img src="images/1.3.png" alt="" class="services__img">
                        <h3 class="services__title">Upper Canvas</h3>
                        <p class="services__description">SUPER LIGHTWEIGHT, Superlite Phylon Sole is made from a special compound material, which results in a very soft and comfortable outsole.</p>
                    </div>
                    <div class="services__content">
                        <img src="images/2.3.png" alt="" class="services__img">
                        <h3 class="services__title">Eva Sponge Insole</h3>
                        <p class="services__description">EVA Sponge Insole provides Ultimate Cushion and Comfort</p>
                    </div>
                    <div class="services__content">
                        <img src="images/3.png" alt="" class="services__img">
                        <h3 class="services__title">Stitching</h3>
                        <p class="services__description">Neat stitching makes the shoes have a good shape, sturdy, comfortable, and durable.</p>
                    </div>
                </div>
            </section>
        </div>
        <!----Product---->
        <section class="product section bd-container" id="products">
            <span class="section-subtitle"></span>
            <h2 class="section-title">PRODUCTS of the week</h2>

            <div class="products__container bd-grid logo-slider slick_two">
                <div class="products__content">
                     <?php
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242152"');
                    $row = mysqli_fetch_assoc($result); 
                    $productid = $row['id_prod']; 
                    ?>
                     <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">Low Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242153"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod']; 
                    ?>
                     <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">Low Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242160"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod']; 
                    ?>
                     <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">Low Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242161"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod'];
                    ?>
                     <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">Low Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242162"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod'];
                    ?>
                     <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">High Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>
                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242163"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod'];
                    ?>
                    <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">High Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>
                <div class="products__content">
                <?php 
                    $result = mysqli_query($con, 'SELECT id_prod, pr_name, image, price FROM product WHERE id_prod = "pr242168"');
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['id_prod'];
                    ?>
                    <?php
                        $image = base64_encode($row['image']);
                        echo '<img src="data:image/jpeg;base64,' . $image . '">';
                        ?>
                    <h3 class="products__name"><?php echo $row['pr_name'] ?></h3>
                    <span class="products__detail">High Price</span><br>
                    <span class="products__price">Rp. <?php echo number_format($row['price'],0); ?></span>
                    <?php echo '<a href="show2.php?id=' . $productid . '" class="button products__button_detail">Product Detail</a>'; ?>
                    <a href="#" class="button products__button"><i class='bx bx-cart-alt'></i></a>
                </div>
            </div>
        </section>

        <!---- Contact us---->
        <div style="background-color: #ABD9FF;">
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's Talk</span>
                        <h2 class="section-title contact__initial">Contact Us</h2>
                        <p class="contact__description">
                            If you want to buy shoes in our store, contact us and we will immediately serve you with service 24/7</p>
                    </div>
                    <div class="contact__button">
                        <a href="Contact2.php" class="button">Contact Us Now</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!----Footer---->
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
    <!----Scroll Reveal---->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/Main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slick.min.js"></script>
    <!-----JS---->
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