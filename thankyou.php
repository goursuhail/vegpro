<?php
// session_start();

require_once('db.php');
require_once('header.php');

try{

$query = "SELECT * FROM `orders` JOIN `customer` ON `orders`.`customer_id` = `customer`.customer_id WHERE `order_id` =".$_GET['order_id'];
$stmt = $conn->query($query);
//echo($query);
?>

<div class="container">
  <?php
    while($row = $stmt->fetch()){
  ?>

  <div class="row">
    <div>
      <?php echo $row['order_id']; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div>
        <?php echo $row['billing_charges']; ?>
      </div>
      <div>
        <?php echo $row['first_name']; ?>
      </div>
      <div>
        <?php echo $row['address']; ?>
      </div>
      <div>
        <?php echo $row['state']; ?>
      </div>
      <div>
        <?php echo $row['pin_code']; ?>
      </div>
    </div>

    <div class="col-md">
    <div>
      <?php echo $row['user_name']?>
    </div>
    <div>
      <?php echo $row['email']?>
    </div>
    <div>
      <?php echo $row['phone']?>
    </div>
    <div>
      <?php echo $row['date']?>
    </div>
  </div>
  </div>
  <?php
      }
  ?>





  <div class="row">
<?php

$query = "SELECT * FROM `order_line_items` JOIN `product` ON `order_line_items`.`product_id` = `product`.product_id WHERE `order_id` =".$_GET['order_id'];
$stmt =$conn->query($query);
//echo($query);
?>



<table>
  <tr>
    <th>Name</th>
    <th>Product Image</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Total</th>
  </tr>

  <?php
  while($row = $stmt->fetch()){

    $total = $row['unit_price'] * $row['qty'];

  ?>

  <tr>
    <td><?php echo $row['name']; ?></td>
    <td><img src="assests/<?php echo $row['product_image']; ?>" height="25%" width="25%"></td>
    <td><?php echo $row['qty']; ?></td>
    <td><?php echo $row['unit_price']; ?></td>
    <td><?php echo $total; ?></td>
  </tr>

<?php
  }
?>

  </table>
</div>
</div>

<?php
}catch(PDOException $e){

}

?>





<?php require_once('footer.php')?>
