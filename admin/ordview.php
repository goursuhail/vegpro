<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Order list</h1>

  </div>
  <html>
    <head>
      <style type="text/css">
        td.completed span{
          background: green;
          color: #FFF;
          padding: 5px 10px;
          border-radius: 3px;
        }

      </style>
    </head>
    <body>

<?php
try{

    $stmt = $conn->query('SELECT orders.order_id, status, billing_charges, shipping_charges, phone, user_name, first_name, last_name, password   FROM `orders` JOIN customer ON orders.order_id = customer.customer_id WHERE orders.order_id ='.$_GET['view']);
?>


<table class="table">
  <thead class="thead-light">
    <tr>

        <th scope="col">Order Id</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
      <th scope="col">Billing Charges</th>
      <th scope="col">Shipping Charges</th>
      <th scope="col">Phone</th>




    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>

  <td><?php echo $row['order_id']; ?></td>
  <td><?php echo $row['user_name']; ?></td>
  <td><?php echo $row['first_name']; ?></td>
  <td><?php echo $row['last_name']; ?></td>
  <td><?php echo $row['password']; ?></td>
  <td class="<?php echo $row['status']; ?>"><span><?php echo $row['status']; ?></span></td>
  <td><?php echo $row['billing_charges']; ?></td>
  <td><?php echo $row['shipping_charges']; ?></td>
  <td><?php echo $row['phone']; ?></td>

</tr>


<?php
}

?>
</tbody>
  </table>
  <?php
}catch(PDOException $e){

}



?>

<?php
try{

    $query = ('SELECT order_line_items.line_item_id, name, price, stock FROM `order_line_items` JOIN product ON order_line_items.line_item_id = product.product_id WHERE order_line_items.order_id ='.$_GET['view']);
    //print_r($query);
    $stmt = $conn->query($query);
?>


<table class="table">
  <thead class="thead-light">
    <tr>

        <th scope="col">Line Item Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>





    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>

  <td><?php echo $row['line_item_id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['price']; ?></td>
  <td><?php echo $row['stock']; ?></td>


</tr>


<?php
}

?>
</tbody>
  </table>
  <?php
}catch(PDOException $e){

}



?>
</body>
</html>
</main>

<?php require_once('footer.php'); ?>
