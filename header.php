<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="vegetable selling">
    <meta name="description" content="">
    <title>Fruit and Vegetable Product</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/structure.css">
    <link rel="stylesheet" href="assests/css/main.css">
    <link rel="stylesheet" href="assests/css/slick.css">
    <link rel="stylesheet" href="assests/css/preset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



    <!-- javascript -->
    <script type="text/javascript" src="assests/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
    <!-- font -->
    <link rel="stylesheet" href="assests/css/font.css">
    <link rel="stylesheet" href="assests/css/fonts.css">
</head>
<body>
   <div class="tr-topbar">
       <div class="container">
           <div class="topbar-content">
               <div class="float-left">
                   <span><span class="icon icon-phone-call"></span> Call us <span class="number">+91-8696893650</span></span>
               </div>
               <div class="float-right">
                   <div class="user-option">
                       <span class="icon icon-avatar"></span>
                       <a href="signin.html">Login</a>  /  <a href="signup.html">Signup</a>
                   </div>
               </div>
           </div>
       </div><!-- /.container -->
   </div><!-- /.tr-topbar -->


<div class="tr-menu">
    <nav class="navbar navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="hidden-md-up">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav hidden-md-down">
                    <li class="nav-item tr-dropdown active">
                        <a class="nav-link" href="#">Home</a>
                        <ul class="tr-dropdown-menu dropdown-left">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home V-1</a></li>
                            <li class="nav-item"><a class="nav-link" href="index1.html">Home V-2</a></li>
                            <li class="nav-item"><a class="nav-link" href="index2.html">Home V-3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="shop-list.html">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Table</a></li>
                    <li class="tr-middle-logo"><a class="navbar-brand" href="index.html"><img class="img-fluid" src="assests/img/logo.png" alt="Logo"></a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item tr-dropdown">
                        <a class="nav-link" href="#">Categories</a>
                        <ul class="tr-dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="category.php?id=1">Vegetable</a></li>
                            <li class="nav-item"><a class="nav-link" href="category.php?id=2">Dairy</a></li>
                            <li class="nav-item"><a class="nav-link" href="category.php?id=3">Bakery</a></li>
                            <li class="nav-item"><a class="nav-link" href="category.php?id=4">Fruit</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->


                <div class="find-option float-right">
                    <ul class="global-list">
                        <li class="tr-search">
                            <div class="search-icon"><span class="icon icon-magnifying-glass"></span></div>
                            <div class="search-form">
                                <form action="#" id="search" method="get">
                                    <input id="inputhead" name="search" type="text" placeholder="Type Your Words & Press Enter">
                                    <button type="submit"><span class="icon icon-magnifying-glass"></span></button>
                                </form><!-- /form -->
                            </div><!-- /s form -->
                        </li>
                        <li class="cart-content tr-dropdown">
                            <a href="#"><span class="icon icon-shopping-basket"></span> <span class="cart-number"><?php echo count($_SESSION['cart']); ?></span></a>
                            <div class="tr-dropdown-menu">
                                <ul class="global-list">

                                    <?php

                                        foreach ($cart_products as $key => $cp) {
                                          ?>
                                          <li class="remove-item">
                                              <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                              <div class="product">
                                                  <a href="details.html">
                                                      <span class="product-image">
                                                          <img src="assests/<?php echo $cp['image']; ?>" alt="Image" class="img-fluid">
                                                      </span>
                                                      <span class="product-title"><?php echo $cp['name']; ?></span>
                                                      <span class="price"><?php echo $cp['price']; ?></span>
                                                  </a>
                                              </div><!-- /.product -->
                                          </li>
                                          <?php
                                        }
                                    ?>

                                </ul>
                                <div class="total-price">
                                    <span><strong>Total Price: </strong>$598:00</span>
                                </div>
                                <div class="buttons">
                                    <a class="btn btn-primary cart-button" href="shopping-cart.html">View Cart</a>
                                    <a class="btn btn-primary" href="#">Checkout</a>
                                </div>
                            </div><!-- /.tr-dropdown-menu -->
                        </li>
                    </ul>
                </div><!-- /.find-option -->

            </div><!-- /.container -->
        </nav>
    </div><!-- /.tr-menu -->
