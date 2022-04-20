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
    <link rel="stylesheet" href="assets/style.css" />
    <title>OmiOnline - Ecommerce</title>
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
              <a href="./shop.php" class="nav__link">Shop</a>
            </li>
          </ul>
        </div>
        <div class="nav__shop">
          <i class="bx bxs-shopping-bag"></i>
        </div>
      </nav>
    </header>

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
          <article class="sneaker">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured1.png" alt="" class="sneaker__img" />
            <span class="sneaker__name"><!--Nike Jordan--><?php echo $featured_data[0]['product_name'] ?></span>
            <span class="sneaker__preci">$<!--149.99--><?php echo $featured_data[0]['product_price'] ?></span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>

          <article class="sneaker">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured2.png" alt="" class="sneaker__img" />
            <span class="sneaker__name">
              <!-- Nike Free RN  -->
              <?php echo $featured_data[0]['product_name'] ?></span>
            <span class="sneaker__preci">$<?php echo $featured_data[0]['product_price'] ?></span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>

          <article class="sneaker">
            <div class="sneaker__sale">Sale</div>
            <img src="assets/img/featured3.png" alt="" class="sneaker__img" />
            <span class="sneaker__name">
              <!-- Nike Free Rn -->
               <?php echo $featured_data[0]['product_name'] ?>
            </span>
            <span class="sneaker__preci">$<?php echo $featured_data[0]['product_price'] ?></span>
            <a href="" class="button-light"
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
              <a href="#women" class="button-light"
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
              <a href="#new" class="button-light"
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
          <article class="sneaker">
            <img src="assets/img/women1.png" alt="" class="sneaker__img" />
            <span class="sneaker__name">
              <!-- Nike Free TR -->
              <?php echo $women_data[2]['product_title'] ?>
            </span>
            <span class="sneaker__preci">$ <?php  echo $women_data[2]['product_price'] ?>

            </span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>
          <article class="sneaker">
            <img src="assets/img/women2.png" alt="" class="sneaker__img" />
            <span class="sneaker__name"><?php echo $women_data[2]['product_title'] ?></span>
            <span class="sneaker__preci">$ <?php  echo $women_data[2]['product_price'] ?></span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>
          <article class="sneaker">
            <img src="assets/img/women3.png" alt="" class="sneaker__img" />
            <span class="sneaker__name"><?php echo $women_data[1]['product_title'] ?></span>
            <span class="sneaker__preci">$<?php  echo $women_data[1]['product_price'] ?></span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>
          <article class="sneaker">
            <img src="assets/img/women4.png" alt="" class="sneaker__img" />
            <span class="sneaker__name"><?php echo $women_data[0]['product_title'] ?></span>
            <span class="sneaker__preci">$<?php  echo $women_data[0]['product_price'] ?></span>
            <a href="" class="button-light"
              >Add to Cart <i class="bx bxs-right-arrow-alt button-icon"></i
            ></a>
          </article>
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
                <a href="#" class="button">Add to Cart</a>
              </div>
            </div>
            <div class="new__sneaker-card">
              <img src="assets/img/new3.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button">Add to Cart</a>
              </div>
            </div>

            <div class="new__sneaker-card">
              <img src="assets/img/new4.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button">Add to Cart</a>
              </div>
            </div>

            <div class="new__sneaker-card">
              <img src="assets/img/new5.png" alt="" class="new__sneaker-img" />
              <div class="new__sneaker-overlay">
                <a href="#" class="button">Add to Cart</a>
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
    <script src="assets/main.js"></script>
  </body>
</html>