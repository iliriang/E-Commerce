<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Air Max Motion 2</title>
  </head>
  <body>
    <!--Header-->
    <header class="l-header" id="header">
      <nav class="nav bd-grid">
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bxs-grid"></i>
        </div>
        <a href="#" class="nav__logo">OmiO</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="index.php#featured" class="nav__link">Featured</a>
            </li>
            <li class="nav__item">
              <a href="index.php#women" class="nav__link">Women</a>
            </li>
            <li class="nav__item">
              <a href="index.php#new" class="nav__link">New</a>
            </li>
            <li class="nav__item">
              <a href="./shop.php" class="nav__link active">Shop</a>
            </li>
          </ul>
        </div>
        <div class="nav__shop">
          <i class="bx bxs-shopping-bag"></i>
        </div>
      </nav>
    </header>

    <!-- ===== HOME ===== -->
    <main class="l-main">
      <div class="home1">
        <!-- ===== SNEAKER ===== -->

        <div class="home1__container">
          <div class="shop__shape">
            <img src="assets/img/AirMax2.png" alt="" class="buyy__img" />
          </div>
          <div class="info">
            <div class="data">
              <span class="data__subtitle">Nike</span>
              <h1 class="data__title">Air Max Motion 2</h1>
              <p class="data__description">
                Nike Air Max Motion 2 blends a breathable mesh upper <br />
                with no-sew overlays for heritage style.
              </p>
            </div>
          </div>

          <!-- ===== ACTIONS ===== -->
          <div class="actions">
            <!-- ===== SIZE ===== -->
            <div class="size">
              <h3 class="size__title">Size</h3>
              <div class="size__content">
                <span class="size__tallas active"> 8.5 </span>
                <span class="size__tallas"> 9 </span>
                <span class="size__tallas"> 9.5 </span>
              </div>
            </div>

            <div class="quality">
              <h3 class="quality__title">Quality</h3>
              <div class="quality__content">
                <span>-</span>
                <span>1</span>
                <span>+</span>
              </div>
            </div>
          </div>

          <!-- ===== Price ===== -->
          <div class="preci">
            <span class="preci__title">$99.00</span>
            <br />
            <br />
            <a href="#" class="preci__button">ADD TO CART</a>
          </div>
        </div>
      </div>
    </main>

    <!-- MAIN -->
    <script src="assets/main.js"></script>
  </body>
</html>
