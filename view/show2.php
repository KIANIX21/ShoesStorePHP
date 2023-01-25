<?php
include '../controller/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <title>ShoesStore</title>
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

  <!-- Gambar Product -->
  <main class="l-main" style="background-color: #ABD9FF; margin-top: 70px;">
    <div class="card-wrapper">
      <div class="card">
        <?php 
        $productid = isset($_GET['id']) ? $_GET['id'] : '';
        $sql = "SELECT product.id_prod, product.pr_name, product.price, 
        product.image, product.image_2, product.image_3, product.image_size, 
        productdetail.rating, productdetail.oldprice, productdetail.color, 
        productdetail.avaible FROM product JOIN productdetail ON 
        productdetail.id_prod = product.id_prod WHERE product.id_prod = '$productid'";
        $result = mysqli_query($con, $sql); ?>
        <!-- card left -->
        <?php
        // Menampilkan data untuk setiap baris
        while ($row = mysqli_fetch_assoc($result)) {
          $rating = $row['rating'];
          $oldprice = $row['oldprice'];
          $color = $row['color'];
          $avaible = $row['avaible'];
          $name =  $row['pr_name'];
          $price = $row['price'];
          // Ubah data gambar dari format BLOB ke base64
          $image = base64_encode($row['image']);
          $image1 = base64_encode($row['image_2']);
          $image2 = base64_encode($row['image_3']);
          $image3 = base64_encode($row['image_size']);
          echo '<div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "data:image/jpeg;base64,' . $image . '"; alt = "shoe image">
                <img src = "data:image/jpeg;base64,' . $image1 . '"; alt = "shoe image">
                <img src = "data:image/jpeg;base64,' . $image2 . '"; alt = "shoe image">
                <img src = "data:image/jpeg;base64,' . $image3 . '"; alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item"style="width: 50%; height: 50%;">
                <a href = "#" data-id = "1">
                  <img src = "data:image/jpeg;base64,' . $image . '"; alt = "shoe image">
                </a>
              </div>
              <div class = "img-item" style="width: 50%; height: 50%; margin-top: 25px;">
                <a href = "#" data-id = "2">
                  <img src = "data:image/jpeg;base64,' . $image1 . '"; alt = "shoe image">
                </a>
              </div>
              <div class = "img-item"style="width: 50%; height: 50%;margin-top: 25px;">
                <a href = "#" data-id = "3">
                  <img src = "data:image/jpeg;base64,' . $image2 . '"; alt = "shoe image">
                </a>
              </div>
              <div class = "img-item"style="width: 50%; height: 50%;margin-top: 25px;">
                <a href = "#" data-id = "4" >
                  <img src = "data:image/jpeg;base64,' . $image3 . '"; alt = "shoe image">
                </a>
              </div>
            </div>
        </div>
        <!-- gambar product -->

        <!-- product description -->
    <div class = "product-content">
        <h1 class = "product-title">'. $name .'</h1>
        <a href = "#" class = "product-link">visit ShoesStore</a>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>'. $rating .'</span>
        </div>
        <div class = "product-price">
            <p class = "last-price">Old Price: <span>'. 'Rp.' . ' ' . $oldprice .'</span></p>
            <p class = "new-price">New Price: <span>'. 'Rp.' . ' ' . number_format($price,0)  .'</span></p>
          </div>
          <div class = "product-detail">
            <h2>ABOUT THIS ITEM: </h2>
            <p>"SUPER LIGHTWEIGHT, Superlite Phylon Sole is made of a special compound material, resulting in a very soft and comfortable outsole.

              Top: Hard Net + TPR Strong and Breathable
              Insole: EVA Sponge Insole provides Ultimate Cushion and Comfort
              Outsole: Phylon Superlite with High Flexibility and Extra Comfort
           
              How to measure a good shoes size:
                <br>
                  1. Measure your foot length <br>
                  2. Then add +/- 1cm from the foot size<br>
                  3. Adjust the size with our size chart</p>
            <p>Example:
                 If your foot length is 24.5cm, we recommend ordering size 39 (25.6cm).</p>
            <ul>
              <li>Color: <span>'. $color .'</span></li>
              <li>Available: <span>'. $avaible .'</span></li>
              <li>Category: <span>Shoes</span></li>
            </ul>
          </div>';
        }
        ?>
        <div class="purchase-info">
          <input type="number" min="0" value="1">
          <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
        </div>
      </div>
  </main>
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
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
      });
    });

    function slideImage() {
      const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

      document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
  </script>
</body>

</html>