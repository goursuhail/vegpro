<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>


<?php
try{

$stmt = $conn->query('SELECT * FROM `product` where `product_id` ='.$_GET['id']);
?>


<div class="container">
  <?php
  while($row = $stmt->fetch()){
    ?>
  <div class="row">
  <div class="col-md-5">
    <span class="product-image">
      <img src="assests/<?php echo $row['product_image']; ?>" alt="Image" class="img-fluid">
    </span>
  </div>
  <div class="col-md-5">
    <span class="product-title"><strong><?php echo $row['name']; ?></strong></span>

    <form action="add-cart.php" method="post">
      <div class="col-md-3">
        <label for="qty">Quantity:-</label>
        <input type="number" name="qty" class="form-control" id="qty">
      </div>

      <div class="add-to-cart-wrapper">
        <button type="submit" class="btn btn-primary">Add to cart</button>
      </div>
      <input type="hidden" name="pid" value="<?php echo $row['product_id'];  ?>" />
    </form>

  </div>
  </div>
  <div class="row col-md-3">
    <label>Description:</label>
    <div class="descri">
    <div>
      <?php echo $row['description']; ?>
   </div>
 </div>
</div>
</div>
<?php
}
?>
<?php

}catch(PDOException $e){


}
?>

<?php require_once('footer.php'); ?>
