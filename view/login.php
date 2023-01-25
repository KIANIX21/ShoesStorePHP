<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/Login.css">
    <title>ShoesStore</title>
    <!-- CSS Style -->
</head>

<body>
    <!-- Header -->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <a href="index.php" class="nav__logo">ShoesStore</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="AboutUs.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="product.php" class="nav__link">Product</a></li>
                    <li class="nav__item"><a href="Contact.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav_shop">
                <a href="#" class="nav__icon">
                    <i class='bx bxs-user-circle'></i>
                </a>
                <div class="nav__shop-content">
                    <div class="btn-signin">
                        <li><i class='bx bxs-log-in-circle'><a href="login.php"> LOG IN</a></i></li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header -->
    <main style="background-color: #ABD9FF;">
        <div class="container-fluid p-3 mt-5">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
                <?php if (!empty($_GET["error"])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Failed! </strong><?php echo $_GET["error"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>    
                            <?php endif; ?>
                <?php if (!empty($_GET["create"])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong><?php echo $_GET["create"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>                                
                            <?php endif; ?>
                    <div class="card bg-white border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h2 class="card-title text-center mb-5 fw-bold text-dark" style="font-family: roboto;">Sign In</h2>
                            <form method="post" action="../controller/control_login.php">
                                <div class="input-group mb-3">
                                    <input class="form-control" id="username" name="username" placeholder="username" type="username" value="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                                </div>
                                <div class="text-center mb-3">
                                    <small class="text-center text-dark">
                                        Don't have an account? <a href="signup.php">Sign Up</a>
                                    </small>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" id="loginButton">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!----Footer---->
    <footer class="footer section bd-container" style="margin-top: 20px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>