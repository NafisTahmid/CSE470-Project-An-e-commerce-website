<?php








?>






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

    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  </head>
  <body>
    <!--Nabbar-->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
      <div class="container">
        <img class="logo" src="assets/imgs/logo.png" />
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
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>

            <li class="nav-item">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="account.html"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Cart-->
    <section class="cart contariner my-5 py-5">
      <div class="container mt-5">
        <h2 class="font-weight-bolde">Your Cart</h2>
        <hr />
      </div>

      <table class="mt-5 pt-5">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="assets/imgs/featured1.jpg" />
              <div>
                <p>Black Shoes</p>
                <small><span>$</span>155</small>
                <br />
                <a class="remove-btn" href="#">Remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn">Edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">155</span>
          </td>
        </tr>

        <tr>
          <td>
            <div class="product-info">
              <img src="assets/imgs/featured1.jpg" />
              <div>
                <p>Black Shoes</p>
                <small><span>$</span>155</small>
                <br />
                <a class="remove-btn" href="#">Remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn">Edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">155</span>
          </td>
        </tr>

        <tr>
          <td>
            <div class="product-info">
              <img src="assets/imgs/featured1.jpg" />
              <div>
                <p>Black Shoes</p>
                <small><span>$</span>155</small>
                <br />
                <a class="remove-btn" href="#">Remove</a>
              </div>
            </div>
          </td>
          <td>
            <input type="number" value="1" />
            <a class="edit-btn">Edit</a>
          </td>

          <td>
            <span>$</span>
            <span class="product-price">155</span>
          </td>
        </tr>
      </table>

      <div class="cart-total">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$155</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$155</td>
          </tr>
        </table>
      </div>

      <div class="checkout-container">
        <button class="btn checkout-btn">Checkout</button>
      </div>
    </section>

    <!--Footer-->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="assets/imgs/logo.png" />
          <p class="pt-3">
            We provide the best products for the most affordable prices
          </p>
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
          <h5 class="" pb-2>Instagram</h5>
          <div class="row">
            <img
              src="assets/imgs/featured1.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="assets/imgs/featured2.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="assets/imgs/featured3.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="assets/imgs/featured4.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="assets/imgs/shoes2.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <img src="assets/imgs/payment.png" />
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
