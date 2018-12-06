<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>

<?php
try{

$stmt = $conn->query('SELECT * FROM `product` where `product_id` ='. $_GET['id']);
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
    <br/>
    <div class="col-md-3">
    <label for="qty">Quantity:-</label>
    <input type="number" class="form-control" id="qty" >
  </div>
  <br/>
  <div>
      <label>Sizes</label>
    <select name="vegetable">
      <option>250gm</option>
      <option>500gm</option>
      <option>1kg</option>
    </select>
  </div>
  <br/>
  <div>
    <button type="button" class="btn btn-primary">Add to cart</button>
  </div>
  </div>
  </div>
  <div class="row">
    <div class="form-group">
  <label for="des">Description:</label>
    <textarea rows="4" cols="50" id="des">
      <?php echo $row['description']; ?>
  </textarea>
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
