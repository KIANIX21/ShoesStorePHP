<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/Style.css">
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
    <!-- Header -->
    <div style="background-color: #aebdca;">
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's Talk</span>
                    <h2 class="section-title contact__initial">Contact Us</h2>
                    <p class="contact__description">
                        If you want to buy shoes in our store, contact us and we will immediately serve you with service 24/7</p>
                </div>
            </div>
        </section>
    </div>
    <div class="bd-container">
        <div class="title">
            <h2>IF YOU HAVE ANY QUESTIONS, PLEASE FILL OUT THE FORM BELOW</h2>
        </div>
        <?php if (!empty($_GET["error"])) : ?>
            <div class="alert-box failed">
                <span class="alert-message">Failed! <?php echo $_GET["error"]; ?></span>
                <button onclick="this.parentNode.remove()" class="alert-close">&times;</button>
            </div>
        <?php endif; ?>
        <?php if (!empty($_GET["Contact"])) : ?>
            <div class="alert-box succes">
                <span class="alert-message">Sent! <?php echo $_GET["Contact"]; ?></span>
                <button onclick="this.parentNode.remove()" class="alert-close">&times;</button>
            </div>
        <?php endif; ?>
        <form method="post" action="../controller/control_contact.php">
            <div class="contact-form">
                <div class="input-fields">
                    <input type="text" class="input" placeholder="Name" value="" required name="name">
                    <input type="text" class="input" placeholder="Phone" value="" required name="phone">
                    <input type="text" class="input" placeholder="City" value="" required name="city">
                </div>
                <div class="input-fields">
                    <textarea placeholder="Message" class="input" required name="message"></textarea>
                    <button class="btn" type="submit">Sent</button>
                </div>
            </div>
        </form>
    </div>
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
    <script src="js/Main.js"></script>
</body>

</html>