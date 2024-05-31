<?php
  include("config.php");
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/16defca36a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <style>
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }

        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        .sproduct select{
            display: block;
            padding: 5px 10px;
        }

        .sproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus{
            outline: none;
        }

        .buy-btn{
            background: #fb774b;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>

</head>
<body>

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
                <a class="nav-link active" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
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

<section class="container sproduct my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="./img/shop/1.jpg" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="./img/shop/1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/shop/24.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/shop/25.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/shop/26.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <h6>Home</h6>

          <?php
            $sql = 'SELECT * FROM products where id = '. $id;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

              while($row = $result->fetch_assoc()) {
                echo '<h3 class="py-4 ">' . $row["name"] . '</h3>';
                echo '<h2>$' .$row["price"]. '</h2>';
                echo '<select class="my-3">
                  <option>Select Size</option>
                  <option>XL</option>
                  <option>XXL</option>
                  <option>Small</option>
                  <option>Large</option>
                </select>'; 
                echo '<input type="number" value="1">
                <button class="buy-btn">Add To Cart</button>
                <h4 class="mt-5 mb-5 ">Product Details</h4>';
                echo '<span>'. $row['description'] .'</span>';
              }
            }
          ?>

        </div>
    </div>
</section>

<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Related  Products</h3>
      <hr class="mx-auto">
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./img/featured/1.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./img/featured/2.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./img/featured/3.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="./img/featured/4.jpg" alt="">
        <div class="star">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <h5 class="p-name">Sport Boots</h5>
        <h4 class="p-price">$92.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  
  </section>


      <footer class="mt-5 py-5">
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
              <p>youssefbaydoun126@gmail.com</p>
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

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img')

        smallimg[0].onclick= function () {
            MainImg.src = smallimg[0].src;    
        }
        smallimg[1].onclick= function () {
            MainImg.src = smallimg[1].src;    
        }
        smallimg[2].onclick= function () {
            MainImg.src = smallimg[2].src;    
        }
        smallimg[3].onclick= function () {
            MainImg.src = smallimg[3].src;    
        }
    </script>
   
</body>
</html>