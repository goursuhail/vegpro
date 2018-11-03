<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<?php
try{

$stmt = $conn->query('SELECT * FROM `product` where `product_id` ='. $_post['id']);
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
    <span class="product-title">Organic <strong><?php echo $row['name']; ?></strong></span>
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
      <option>250gm</option>
      <option>250gm</option>
    </select>
  </div>
  <br/>
  <div>
    <button type="button" class="btn btn-primary">Add to cart</button>
  </div>

</div>
</div>
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
