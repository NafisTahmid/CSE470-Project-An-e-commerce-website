<?php 

include('controller/connection.php');


if(isset($_GET['product_id'])) {

  
  $product_id = $_GET['product_id'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");

  $stmt->bind_param("i",$product_id);

  $stmt->execute();
  $product = $stmt->get_result();//[]
  
}
 //no product id was given
else {
   header('location:index.php');
 }

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

    <!--Single product-->
    <section class="container single-product my-5 pt-5">
      <div class="row mt-5">

        <?php while($row=$product->fetch_assoc()){ ?>
        
        <div class="col-lg-5 col-md-6 col-sm-12">
          <img class="img-fluid w-100 pb-1" src="views/assets/imgs/<?php echo $row['product_image']; ?>" id="mainImg" />
          <div class="small-img-group">
            <div class="small-img-col">
              <img
                src="views/assets/imgs/<?php echo $row['product_image']; ?>"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="views/assets/imgs/<?php echo $row['product_image2']; ?>"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="views/assets/imgs/<?php echo $row['product_image3']; ?>"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="views/assets/imgs/<?php echo $row['product_image4']; ?>"
                width="100%"
                class="small-img"
              />
            </div>
          </div>
        </div>

       

        <div class="col-lg-6 col-md-12 col-12">
          <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
          <h2>$<?php echo $row['product_price']; ?></h2>
          <form method="POST" action="cart.php">
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
          <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
          <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>



          <input type="number" name="product_quantity"  value="1" />
          <button class="buy-btn" type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        
          
          <h4 class="mt-5 mb-5">Product details</h4>
          <span>
          <?php echo $row['product_description'];?>
          </span>
        </div>
        
        <?php } ?>
      </div>
    </section>



    <!--Related products-->

    <section id="related-products" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr class="mx-auto" ></hr>
      
      </div>
      <div class="row mx-auto container-fluid">
        
        <?php include('controller/get_related_products_shoes.php'); ?>
        <?php while($row=$related_products_shoes->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="views/assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sport Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        <?php } ?>
        


        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          

          <img class="img-fluid mb-3" src="views/assets/imgs/featured2.jpg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sport Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        
      
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            
     
          <img class="img-fluid mb-3" src="views/assets/imgs/featured3.jpg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sport Shoes</h5>
          <h4 class="p-price">$199.8</h4>
         
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      
        </div>
        

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">

      
          <img class="img-fluid mb-3" src="views/assets/imgs/featured4.jpg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sport Shoes</h5>
          <h4 class="p-price">$199.8</h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
    
        </div>
      </div>
    </section>


    

    <!--Footer-->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="views/assets/imgs/logo.png" />
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
              src="views/assets/imgs/featured1.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="views/assets/imgs/featured2.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="views/assets/imgs/featured3.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="views/assets/imgs/featured4.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="views/assets/imgs/shoes2.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <img src="views/assets/imgs/payment.png" />
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




    <script>

      var mainImg = document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img");

      for(let i=0; i<4; i++) {
                smallImg[i].onclick = function(){
                mainImg.src = smallImg[i].src;
              }
      }

    </script>
  </body>
</html>

