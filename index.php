 <?php
include 'resources\dbResources.php';
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/style.css" />
    
    <title>OmiOnline - Ecommerce</title>
  </head>
  <body>

    <!-- Header -->
     <header class="l-header" id="header">
      <nav class="nav bd-grid">
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bxs-grid"></i>
        </div>
        <a href="#" class="nav__logo">OmiO</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active">Home</a>
            </li>
            <li class="nav__item">
              <a href="#featured" class="nav__link">Featured</a>
            </li>
            <li class="nav__item">
              <a href="#women" class="nav__link">Women</a>
            </li>
            <li class="nav__item">
              <a href="#new" class="nav__link">New</a>
            </li>
            <li class="nav__item">
              <a href="./shop.php" class="nav__link" >Shop</a>
            </li>
            <li class="nav__item">
              <a href="./login.php" class="nav__link" >Login</a>
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
      <!--===== HOME =====-->
      <section class="home" id="home">
        <div class="home__container bd-grid">
          <div class="home__sneaker">
            <div class="home__shape">
              <img src="assets/img/imghome.png" alt="" class="home__img" />
            </div>
          </div>
          <div class="home__data">
            <span class="home__new"> <!--New in--><?php echo $all_products_data[0]['new_title'] ?></span> 
            <h1 class="home__title">
              <?php echo $all_products_data[0]['title'] ?> <!--YEEZY BOOST--> <br />
          <?php echo $all_products_data[0]['second_title'] ?> <!-- SPLY - 350 -->
            </h1>
            <p class="home__description">
              <!-- Explore the new collection of SNEAKERS -->
              <?php echo $all_products_data[0]['description'] ?>
            </p>
            <a href="#featured" class="button">Explore Now</a>
          </div>
        </div>
      </section>
      <!--===== FEATURED =====-->
      <section class="featured section" id="featured">
        <h2 class="section-title"><!--FEATURED--><?php echo $featured_data[0]['title'] ?> </h2>
        <div class="featured__container bd-grid">
          <article class="sneaker" id="product-1">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured1.png" alt="" class="sneaker__img" id='foto' />
            <span class="sneaker__name"><?php echo $featured_data[0]['product_name'] ?></span>
            <span class="sneaker__preci"><?php echo $featured_data[0]['product_price'] ?></span>
            <a href="" class="button-light" onclick='addToCart(event, 0)'
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>

          <article class="sneaker" id="product-2">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured2.png" alt="" class="sneaker__img" />
            <span class="sneaker__name">
              <?php echo $featured_data[1]['product_name'] ?></span>
            <span class="sneaker__preci">$<?php echo $featured_data[1]['product_price'] ?></span>
            <a href="" class="button-light" onclick='addToCart(event, 1)'
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>

          <article class="sneaker">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured3.png" alt="" class="sneaker__img" />
            <span class="sneaker__name">
               <?php echo $featured_data[2]['product_name'] ?>
            </span>
            <span class="sneaker__preci">$<?php echo $featured_data[2]['product_price'] ?></span>
            <a href="" class="button-light"  onclick='addToCart(event, 2)'
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>
        </div>
      </section>

      <!--===== COLLECTION =====-->
      <section class="collection section">
        <div class="collection__container bd-grid">
          <div class="collection__card">
            <div class="collection__data">
              <h3 class="collection__name">
                <!-- Nike -->
                 <?php echo $brand_data[1]['title'] ?>
              </h3>
              <p class="collection__description">
                <!-- New collection 2021 -->
                <?php echo $brand_data[0]['description'] ?>

              </p>
              <a href="#women" class="button-light"  onclick='addToCart(event)'
                >Buy now<i class="bx bxs-right-arrow-alt button-icon"></i>
              </a>
            </div>
            <img
              src="assets/img/collection1.png"
              alt=""
              class="collection__img"
            />
          </div>
          <div class="collection__card">
            <div class="collection__data">
              <h3 class="collection__name">
                <!-- Addidas -->
                 <?php echo $brand_data[0]['title'] ?>

              </h3>
              <p class="collection__description">
                <!-- New collection 2021 -->
                              <?php echo $brand_data[0]['description'] ?>
</p>
              <a href="#new" class="button-light"  onclick='addToCart(event)'
                >Buy now<i class="bx bxs-right-arrow-alt button-icon"></i>
              </a>
            </div>
            <img
              src="assets/img/collection2.png"
              alt=""
              class="collection__img"
            />
          </div>
        </div>
      </section>
      <!--===== WOMEN SNEAKERS =====-->
      <section class="women section" id="women">
        <h2 class="section-title">
          <!-- WOMEN SNEAKERS -->
         <?php echo $women_data[0]['title'] ?>
         
        </h2>
        <div class="women__container bd-grid">

            <div class="owl-carousel owl-theme">

              <article class="sneaker item">
                <img src="assets/img/women1.png" alt="" class="sneaker__img" />
                <span class="sneaker__name">
                  <!-- Nike Free TR -->
                  <?php echo $women_data[2]['product_title'] ?>
                </span>
                <span class="sneaker__preci">$ <?php  echo $women_data[2]['product_price'] ?>

                </span>
                <a href="" class="button-light" onclick='addToCart(event)'
                  >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
                ></a>
              </article>
              <article class="sneaker item">
                <img src="assets/img/women2.png" alt="" class="sneaker__img" />
                <span class="sneaker__name"><?php echo $women_data[2]['product_title'] ?></span>
                <span class="sneaker__preci">$ <?php  echo $women_data[2]['product_price'] ?></span>
                <a href="" class="button-light"  onclick='addToCart(event)'
                  >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
                ></a>
              </article>
              <article class="sneaker item">
                <img src="assets/img/women3.png" alt="" class="sneaker__img" />
                <span class="sneaker__name"><?php echo $women_data[1]['product_title'] ?></span>
                <span class="sneaker__preci">$<?php  echo $women_data[1]['product_price'] ?></span>
                <a href="" class="button-light"  onclick='addToCart(event)'
                  >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
                ></a>
              </article>
              <article class="sneaker item">
                <img src="assets/img/women4.png" alt="" class="sneaker__img" />
                <span class="sneaker__name"><?php echo $women_data[0]['product_title'] ?></span>
                <span class="sneaker__preci">$<?php  echo $women_data[0]['product_price'] ?></span>
                <a href="" class="button-light"  onclick='addToCart(event)'
                  >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
                ></a>
              </article>

            </div>    

        </div>
      </section>
      <!--===== OFFER =====-->
      <section class="offer section">
        <div class="offer__container bd-grid">
          <div class="offer__data">
            <h3 class="offer__title"><?php  echo $discound_data[0]['title'] ?></h3>
            <p class="offer__description"><?php  echo $discound_data[0]['description'] ?></p>
            <a href="#" class="button">Shop Now</a>
          </div>
          <img src="assets/img/offert.png" alt="" class="offer__img" />
        </div>
      </section>
      <!--===== NEW COLLECTION =====-->
      <section class="new section" id="new">
        <h2 class="section-title"><?php  echo $new_collection_data[0]['title'] ?></h2>
        <div class="new__container bd-grid">
          <div class="new__mens">
            <img src="assets/img/new1.png" alt="" class="new__mens-img" />
            <h3 class="new__title"><?php  echo $new_collection_data[0]['second_title'] ?></h3>
            <span class="new__preci"><?php  echo $new_collection_data[0]['product_price'] ?></span>
            <a href="#" class="button-light"
              >View Collection <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </div>
          <div class="new__sneaker">
            <div class="new__sneaker-card">
              <img src="assets/img/new2.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button"  onclick='addToCart(event)'>Add to Cart</a>
              </div>
            </div>
            <div class="new__sneaker-card">
              <img src="assets/img/new3.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button"  onclick='addToCart(event)'>Add to Cart</a>
              </div>
            </div>

            <div class="new__sneaker-card">
              <img src="assets/img/new4.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button"  onclick='addToCart(event)'>Add to Cart</a>
              </div>
            </div>

            <div class="new__sneaker-card">
              <img src="assets/img/new5.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button"  onclick='addToCart(event)'>Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--===== NEWSLETTER =====-->
      <section class="newsletter section">
        <div class="newsletter__container bd-grid">
          <div>
            <h3 class="newsletter__title">
              <?php  echo $subscribe_data[0]['title'] ?> <br />
              <?php  echo $subscribe_data[0]['second_title'] ?> 
            </h3>
            <p class="newsletter__description">
                 <?php  echo $subscribe_data[0]['description'] ?> 
            </p>
          </div>
          <form action="" class="newsletter__subscribe">
            <input
              type="text"
              placeholder="@email.com"
              class="newsletter__input"
            />

            <a href="#" class="button">Subscribe</a>
          </form>
        </div>
      </section>

       <!--contact-form-->

  <div class="container_contactform bd-grid">
      <h3>Contact Form</h3>
    
    <form action="/action_page.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name...">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name...">
  
      <label for="subject">Message</label>
      <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
    </form>
  
  </div>
    </main>

 






    <!--Footer-->
    <footer class="footer section">
      <div class="footer__container bd-grid">
        <div class="footer__box">
          <h3 class="footer__title"> <?php  echo $footer_data[2]['title'] ?> </h3>
          <p class="footer__description"> <?php  echo $footer_data[2]['description'] ?> </p>
        </div>
        <div class="footer__box">
          <h3 class="footer__title"><?php  echo $footer_data[1]['title'] ?> </h3>
          <ul>
            <li><a href="#home" class="footer__link">Home</a></li>
            <li><a href="#featured" class="footer__link">Featured</a></li>
            <li><a href="#women" class="footer__link">Women</a></li>
            <li><a href="#new" class="footer__link">New</a></li>
          </ul>
        </div>

        <div class="footer__box">
          <h3 class="footer__title"><?php  echo $footer_data[0]['title'] ?></h3>
          <ul>
            <li><a href="#" class="footer__link">Product Help</a></li>
            <li><a href="#" class="footer__link">Customer Care</a></li>
            <li><a href="#" class="footer__link">Authorized Services</a></li>
          </ul>
        </div>

        <div class="footer__box">
          <a href="#" class="footer__social"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="footer__social"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a href="#" class="footer__social"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="footer__social"><i class="bx bxl-google"></i></a>
        </div>
      </div>
      <p class="footer__copy">
<?php  echo $ending_data[0]['text'] ?>      </p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="assets/main.js"></script>
  </body>
</html>
