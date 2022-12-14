<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- CSS only -->

    <script
      src="https://kit.fontawesome.com/7158ac9370.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <!-- JavaScript Bundle with Popper -->

    <link
      rel="stylesheet"
      type="text/css"
      href="//use.fontawesome.com/releases/v5.7.2/css/all.css"
    />

    <link rel="stylesheet" href="views/assets/css/style.css" />

    <link rel="stylesheet" href="views/assets/css/font-awesome.min.css" />
  </head>
  <body>
    <!--Nabbar-->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
      <div class="container">
        <img class="logo" src="views/assets/imgs/logo.png" />
        <h2 class="brand">Orange</h2>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse nav-buttons"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>

            <li class="nav-item">
              <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="account.html"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Home-->

    <section id="home">
      <div class="container">
        <h5>NEW ARRIVALS</h5>
        <h1><span>Best Prices</span>This Season</h1>
        <p>Eshop offfers the best products for the most affordable prices</p>
        <button>Shop Now</button>
      </div>
    </section>

    <!--Brands-->
    <section id="brand" class="container">
      <div class="row">
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="views/assets/imgs/brand1.png"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="views/assets/imgs/brand2.png"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="views/assets/imgs/brand3.png"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="views/assets/imgs/brand4.jpg"
        />
      </div>
    </section>

    <!--New-->
    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!--One-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="views/assets/imgs/1.png" />
          <div class="details">
            <h2>Extremely Awesome Shoes</h2>
            <button class="text-upper">Shop Now</button>
          </div>
        </div>

        <!--Two-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="views/assets/imgs/2.jpg" />
          <div class="details">
            <h2>Extremely Awesome Jackets</h2>
            <button class="text-upper">Shop Now</button>
          </div>
        </div>

        <!--Three-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="views/assets/imgs/3.jpg" />
          <div class="details">
            <h2>50% OFF Watches</h2>
            <button class="text-upper">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!--Featured-->

    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto" ></hr>
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('controller/get_featured_products.php'); ?>

      <?php while($row= $featured_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="views/assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php } ?> 
      </div>
    </section>

    <!--Banner-->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>Autumn Collection <br> UP to 30% OFF</h1>
        <button class="text-uppercase">shop now</button>
      </div>
    </section>

    <!--Coats-->
    <section id="coats" class="my-5 ">
      <div class="container text-center mt-5 py-5">
        <h3>Dresses & Coats</h3>
        <hr class="mx-auto" ></hr>
        <p>Here you can check out our amazing clothes</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('controller/get_coats.php'); ?>
      <?php while($row=$coats_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="views/assets/imgs/<?php echo $row['product_image']; ?>" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        <?php } ?>

      </div>
    </section>

      <!--Watches-->
      <section id="watches" class="my-5 ">
        <div class="container text-center mt-5 py-5">
          <h3>Watches</h3>
          <hr class="mx-auto" ></hr>
          <p>Check out our unique watches</p>
        </div>
        <div class="row mx-auto container-fluid">

          <?php include('controller/get_watches.php'); ?>
          <?php while($row=$watches_products->fetch_assoc()) {?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="views/assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
          </div>
          <?php } ?>

        </div>
      </section>


    <!--Shoes-->
    <section id="shoes" class="my-5 ">
      <div class="container text-center mt-5 py-5">
        <h3>Shoes</h3>
        <hr class="mx-auto" ></hr>
        <p>Here you can check out our amazing shoes</p>
      </div>
      <div class="row mx-auto container-fluid">
        <?php include('controller/get_shoes.php'); ?>
        <?php while($row=$shoes_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="views/assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        <?php } ?>
      </div>
    </section>

    <!--Footer-->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="views/assets/imgs/logo.png"/>
          <p class="pt-3">We provide the best products for the most affordable prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
          <ul class="text-uppercase">

            <li><a href="#">men</a></li>
            <li><a href="#">women</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">new arrivals</a></li>
            <li><a href="#">clothes</a></li>
          </ul>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Contact Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>1234 Street Name, City</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
              <p>info@email.com</p>
          </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class=""pb-2>Instagram</h5>
          <div class="row">
            <img src ="views/assets/imgs/featured1.jpg" class="img-fluid w-25 h-100 m-2">
            <img src ="views/assets/imgs/featured2.jpg" class="img-fluid w-25 h-100 m-2">
            <img src ="views/assets/imgs/featured3.jpg" class="img-fluid w-25 h-100 m-2">
            <img src ="views/assets/imgs/featured4.jpg" class="img-fluid w-25 h-100 m-2">
            <img src ="views/assets/imgs/shoes2.jpg" class="img-fluid w-25 h-100 m-2">
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class = "row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <img src="views/assets/imgs/payment.png"/>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
           <p>cEommerce @ 2022 All Right Reserved</p>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
           </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
