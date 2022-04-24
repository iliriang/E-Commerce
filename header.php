<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </html>
       <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <header class="l-header" id="header">
      <nav class="nav bd-grid">
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bxs-grid"></i>
        </div>
        <a href="#" class="nav__logo">OmiO</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="./index.php#home" class="nav__link ">Home</a>
            </li>
            <li class="nav__item">
              <a href="./index.php#featured" class="nav__link">Featured</a>
            </li>
            <li class="nav__item">
              <a href="./index.php#women" class="nav__link">Women</a>
            </li>
            <li class="nav__item">
              <a href="./index.php#new" class="nav__link">New</a>
            </li>
            <li class="nav__item">
              <a href="./shop.php" class="nav__link" >Shop</a>
            </li>
            <li class="nav__item">
              <a href="./login.php" class="nav__link active" >Login</a>
            </li>
              
          </ul>
        </div>
        <div class="nav__shop" onclick="addClass()">
          <i class="bx bxs-shopping-bag"></i>
        </div>
      </nav>
    </header>

    <div class="overlay"></div>
    <div class="cart">
    <div class="cart-header">
        <h3 class=”Heading”>Shopping Cart</h3>
        <div class='close-ikon' onclick="removeClass()">
          <i class="fas fa-times"></i> </div>
        </div>
        
 <div class="text-content ">
    <div id="content-ikon">
      <i class="fas fa-shopping-bag"></i>
    </div>
   <p class="text-empty"> Your shopping cart is currently empty. </p>
  </div>
  <div class="cart-body">
    <img class="product-img" width="100" >
     <div class="product-name"></div>
     <div class="product-price"></div>
  </div>
    <div class='cart-footer'>
      <h3 class='Heading'>Total</h3>
      <p class="price">Price</p>

    </div>
    </div>
    <main class="l-main">
            <script src="assets/main.js"></script>
