<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <?php
  try{

  $query = "SELECT * FROM `orders` JOIN `customer` ON `orders`.`customer_id` = `customer`.customer_id WHERE `order_id` =".$_GET['view'];
  $stmt = $conn->query($query);
  $row = $stmt->fetch();
  ?>
  <h1 class="h2">Order #<?php echo $row['order_id']; ?></h1>

  </div>
  <div class="container">
    <?php

    ?>

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





    <div class="row">
  <?php

  $query = "SELECT * FROM `order_line_items` JOIN `product` ON `order_line_items`.`product_id` = `product`.product_id WHERE `order_id` =".$_GET['view'];
  $stmt =$conn->query($query);
  //echo($query);
  ?>



  <table class="table">
    <thead class="thead-light">
    <tr>
      <th>Name</th>
      <th>Product Image</th>
      <th>Quantity</th>
      <th>Unit Price</th>
      <th>Total</th>
    </tr>
  </thead>

  <tbody>
    <?php
    while($row = $stmt->fetch()){

      $total = $row['unit_price'] * $row['qty'];

    ?>

    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><img src="<?php echo $row['product_image']; ?>" height="25%" width="25%"></td>
      <td><?php echo $row['qty']; ?></td>
      <td><?php echo $row['unit_price']; ?></td>
      <td><?php echo $total; ?></td>
    </tr>

  <?php
    }
  ?>
</tbody>
    </table>
  </div>
  </div>

  <?php
  }catch(PDOException $e){

  }

  ?>
</main>

<?php require_once('footer.php'); ?>
