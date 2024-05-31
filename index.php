<?php
  include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Store</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/16defca36a.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>

    <link rel="stylesheet" href="style.css">

    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>

</head>
<body>

<!---navigation--> 

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <img src="./img/LogoMakr-1.png" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fa fa-bar"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <i class="fa-brand fa-search"></i>
            <i class="fa-brand fa-bag-shopping"></i>
          </li>
          
      </div>
    </div>
  </nav>

<section id="home">
  <div class="container">
    <h5>NEW ARRAIVALS</h5>
    <H1><span>Best Price</span> This Year</H1>
    <p>Shoomatic offers your very comfortable time<br>on walking and exercises.</p>
    <button>Shop Now</button>
  </div>
</section>

<section id="brand" class="container">
  <div class="row m-0 py-5">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/1.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/2.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/3.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/4.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/5.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="./img/brand/6.png" alt="">
  </div>

</section>

<section id="new" class="w-100">
  <div class="row p-0 m-0">
    <div class="one col-lg-4 col-md-12 col-12 p-0">
      <img class="img-fluid" src="./img/new/1.jpg" alt="">
      <div class="details">
        <h2>Extreme Rare Sneakers</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
    <div class="one col-lg-4 col-md-12 col-12 p-0">
      <img class="img-fluid" src="./img/new/2.jpg" alt="">
      <div class="details">
        <h2>Awesome Blank Outfit</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
    <div class="one col-lg-4 col-md-12 col-12 p-0">
      <img class="img-fluid" src="./img/new/3.jpg" alt="">
      <div class="details">
        <h2>Sportwear Up To 50% Off</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>
  </div>

</section>

<section id="featured" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
    <h3>Our Featured</h3>
    <hr class="mx-auto">
    <p>Here you can check out our new products with fair price on elegance.</p>
  </div>
  <div class="row mx-auto container-fluid">
    <?php
      $sql = "SELECT * FROM products";
      $result = $conn->query($sql);
      
      // Check if there are any products
      if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
              echo '<div class="product text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="./img/featured/1.jpg" alt="">
              <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>';
              echo '<h5 class="p-name">' . $row["name"] . '</h5>';
              // echo "<p>Description: " . $row["description"] . "</p>";
              echo '<h4 class="p-price">$' . $row["price"] . "</p>";
              echo '<a style="text-decoration: none; color: #fff;" href="product-details.php?id='. $row["id"] .'"> <button class="buy-btn"> Buy Now </button></a>
              </div>';
          }
      }
    ?>
   
  </div>

</section>

<section id="banner" class="my-5 py-5">
  <div class="container">
    <h4>MID SEASON'S SALE</h4>
    <h1>Autumn Collection<br>UP TO 20% OFF</h1>
    <button class="text-uppercase">Shop Now</button>
  </div>
</section>

<section id="clothes" class="my-5">
  <div class="container text-center mt-5 py-5">
    <h3>Dresses & Jumpsuits <h3>
    <hr class="mx-auto">
    <p>Here you can check out our new products with fair price on elegance.</p>
  </div>
  <div class="row mx-auto container-fluid">
    
  <?php

  $sql = "SELECT * FROM products WHERE category = 'clothes'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo '<div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="./img/clothes/1.jpg" alt="">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>';
          echo '<h5 class="p-name">' . $row["name"] . '</h5>';
          echo '<h4 class="p-price">>' . $row["name"] . '</h4>';
          echo '<button class="buy-btn" onclick="moveToDetailsPage(' . $row["id"] . ')">Buy Now</button>';
          echo '</div>';
      }
  }
  
  ?>

  </div>

</section>

<section id="watches" class="my-5">
  <div class="container text-center mt-5 py-5">
    <h3>Best Watches <h3>
    <hr class="mx-auto">
    <p>Here you can check out our new products with fair price on elegance.</p>
  </div>
  <div class="row mx-auto container-fluid">
    

    <?php 
      $sql = 'select * from products where category="watches"';
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '<div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="./img/watches/1.jpg" alt="">
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>';
          echo '<h5 class="p-name">'. $row['name'] . '</h5>';
          echo '<h4 class="p-price">$'. $row['price'] . '</h4>';
          echo '<a style="text-decoration: none; color: #fff;" href="product-details.php?id='. $row["id"] .'"> <button class="buy-btn"> Buy Now </button></a>';
          echo "</div>";
        }
      }
    ?>

    
  </div>

</section>

<section id="shoes" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
    <h3>Running Shoes<h3>
    <hr class="mx-auto">
    <p>Here you can check out our new products with fair price on elegance.</p>
  </div>
  <div class="row mx-auto container-fluid">

    <?php
    $query = "SELECT * FROM products WHERE category = 'shoes'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./img/shoes/8.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">'. $row['name'] .'</h5>
        <h4 class="p-price">'. $row['price'] .'</h4>
        <button class="buy-btn" onclick="moveToDetailsPage(' . $row['id'] . ')" >Buy Now</button>
      </div>';
      }
    }
    
    ?>
  </div>

</section>
<footer class="mt-5 py-5" id="about">
  <div class="row container mx-auto pt-5">
    <div class="footer-one col-lg-3 col-md-6 col-12">
      <img src="./img/LogoMaker-2.png" alt="">
      <p class="pt-3">
        Fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna fringilla diam maecenas ultricies mineget mauris
      </p>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
      <h5 class="pb-2">Featured</h5>
      <ul class="text-uppercase list-unstyled">
        <li><a href="#">men</a></li>
        <li><a href="#">women</a></li>
        <li><a href="#">boys</a></li>
        <li><a href="#">girls</a></li>
        <li><a href="#">new arrivals</a></li>
        <li><a href="#">shoes</a></li>
        <li><a href="#">clothes</a></li>
      </ul>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
      <h5 class="pb-2">Contact Us</h5>
      <div>
        <h6 class="text-uppercase">Address</h6>
        <p>MAJDEL ANJAR, MASNAA</p>
      </div>
      <div>
        <h6 class="text-uppercase">Phone</h6>
        <p>+961 81 091 429<p>
      </div>
      <div>
        <h6 class="text-uppercase">Email</h6>
        <p>mosaababdelrahman@gmail.com</p>
      </div>
    </div>

    <div class="footer-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Instagram</h5>
      <div class="row">
        <img class="img-fluid w-25 h-100 m-2" src="./img/insta/1.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./img/insta/2.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./img/insta/3.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./img/insta/4.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./img/insta/5.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="copyright mt-5">
    <div class="row container mx-auto">
      <div class="col-lg-3 col-md-6 col-12 mb-4">
        <img src="./img/payment.png" alt="">
      </div>
      <div class="col-lg-3 col-md-6 col-12 mb-2">
        <p>elegance eCommerce © 2023. All Rights Reserved</p>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
     integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
     integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
</body>
</html>