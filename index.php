<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>



<div id="home-carousel" class="carousel slide home-slider tr-banner" data-ride="carousel" style="background-image: url(assests/img/background.jpg);">
      <div class="carousel-inner text-center" role="listbox">
          <div class="carousel-item item active">
              <div class="item-middle">
                <div class="middle-content">
                    <div class="container">
                        <div class="banner-info">
                            <h1 data-animation="animated pulse">Welcome To Vegpro</h1>
                            <h2 data-animation="animated pulse">Fresh Organic Vegetable & Fruits</h2>
                            <p  data-animation="animated pulse">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#"   data-animation="animated fadeInDown" class="btn btn-primary">View More</a>
                        </div>
                    </div><!-- /.container -->
                </div><!-- /.middle-content -->
              </div><!-- /.item-middle -->
          </div><!-- /.carousel-item -->
          <div class="carousel-item">
                <div class="item-middle">
                    <div class="middle-content">
                        <div class="container">
                            <div class="banner-info">
                                <h1 data-animation="animated pulse">Welcome To Vegpro</h1>
                                <h2 data-animation="animated pulse">Fresh Organic Vegetable & Fruits</h2>
                                <p  data-animation="animated pulse">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#"   data-animation="animated fadeInDown" class="btn btn-primary">View More</a>
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.middle-content -->
                </div><!-- /.container -->
            </div><!-- /.item-middle -->

            <div class="carousel-item">
                <div class="item-middle">
                  <div class="middle-content">
                      <div class="container">
                          <div class="banner-info">
                              <h1 data-animation="animated fadeInUp">Welcome To Vegpro</h1>
                              <h2 data-animation="animated fadeInUp">Fresh Organic Vegetable & Fruits</h2>
                              <p  data-animation="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <a href="#"   data-animation="animated fadeInUp" class="btn btn-primary">View More</a>
                          </div>
                      </div><!-- /.container -->
                  </div><!-- /.middle-content -->
                </div><!-- /.item-middle -->
            </div><!-- /.carousel-item -->
        </div><!-- /.carousel-inner -->
        <div class="container indicators-content">
               <ol class="carousel-indicators">
                   <li data-target="#home-carousel" data-slide-to="0"  class="active"></li>
                   <li data-target="#home-carousel" data-slide-to="1"></li>
                   <li data-target="#home-carousel" data-slide-to="2"></li>
               </ol>
           </div><!-- /.container -->
       </div><!-- /#home-slider -->
       <div class="tr-promotion">
           <div class="container">
               <div class="row">
                   <div class="col-md-4">
                       <div class="promotion" style="background-image: url(assests/img/promotion1.png);">
                           <div class="promotion-info">
                               <h1>Healthy <span>Vegetable</span></h1>
                               <p>Donec fringilla, erat et mper eleifend, justo quam.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="promotion" style="background-image: url(assests/img/promotion2.png);">
                           <div class="promotion-info">
                               <h1>Organic <span>Juice</span></h1>
                               <p>Donec fringilla, erat et mper eleifend, justo quam.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="promotion" style="background-image: url(assests/img/promotion3.png);">
                           <div class="promotion-info">
                               <h1>Organic <span>Fruit</span></h1>
                               <p>Donec fringilla, erat et mper eleifend, justo quam.</p>
                           </div>
                       </div>
                   </div>
               </div><!-- /.row -->
           </div><!-- /.container -->
       </div><!-- /.tr-promotion -->

        <div class="tr-products products-two popup-two section-padding">
           <div class="container">
               <div class="section-title">
                   <h1>Discover our</h1>
                   <h2>Popular <strong>farmfoom</strong></h2>
               </div>

               <?php
                try{

                   $stmt = $conn->query('SELECT * FROM `product`');
                   ?>
                   <div class="product-wrapper">
                   <?php
                   while($row = $stmt->fetch()){
                     ?>
                     <div class="product">
                        <a href="product-detail.php?id=<?php echo $row['product_id']; ?>">
                           <span class="row">
                             <span class="col-md-5">
                               <span class="product-image">
                                 <img src="assests/<?php echo $row['product_image']; ?>" alt="Image" class="img-fluid">
                               </span>
                             </span>
                             <span class="col-md-7">
                               <span class="product-title">Organic <strong><?php echo $row['name']; ?></strong></span>
                               <span class="price">$<?php echo $row['price']; ?></span>
                             </span>
                           </span>
                         </a>
                         <!--
                          <div class="product-icon">
                             <ul class="global-list">
                                 <li><a href="#"><span class="icon icon-love"></span></a></li>
                                 <li><a href="#"><span class="icon icon-shopping-cart"></span></a></li>
                                 <li><a class="image-link" href="assests/<?php echo $row['product_image']; ?>"><span class="icon icon-full-screen"></span></a></li>
                             </ul>
                         </div>
                       -->
                     </div><!-- /.product -->


                     <?php
                   }
                  ?>
                </div> <!-- .product-wrapper -->
                  <?php
                }catch(PDOException $e){

                }
               ?>



              </div><!-- container -->

            </div><!-- tr products -->

<?php require_once('footer.php'); ?>
