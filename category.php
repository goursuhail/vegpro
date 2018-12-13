
<?php require_once('db.php'); ?>

<?php require_once('header.php'); ?>



<?php
try{

$stmt = $conn->query('SELECT * FROM `category` where `category_id` ='. $_GET['id']);
?>


<div class="container">


  <?php
  $row = $stmt->fetch()
  ?>
  <div class="row">
    <div class="section-title">
  <h2><strong><?php echo $row['category_name']; ?></strong></h2>
</div>
</div>

               <?php
                try{

                   $stmt = $conn->query('SELECT * FROM `product` where `category_id` ='. $_GET['id']);
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

                     </div><!-- /.product -->


                     <?php
                   }
                  ?>
                </div> <!-- .product-wrapper -->
                  <?php
                }catch(PDOException $e){

                }
               ?>
<?php
}catch(PDOException $e){


}
?>





<?php require_once('footer.php'); ?>
