<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Order</h1>
    <div class="btn-toolbar mb-2 mb-md-0">


     <div class="btn-group mr-2">
       <a  class="btn btn-sm btn-outline-secondary" href="order.php">Add New</a>
    </div>

    </div>
  </div>

<?php
try{

    $query = "SELECT * FROM `orders` JOIN `customer` ON `orders`.`customer_id` = `customer`.customer_id";
    $stmt = $conn->query($query);
?>


<table class="table">
  <thead class="thead-light">
    <tr>


      <th scope="col">Order Id</th>
      <th scope="col">Status</th>
      <th scope="col">Billing Charges</th>
      <th scope="col">Shipping Charges</th>
      <th scope="col">Phone</th>
      <th scope="col">Customer Name</th>



    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>


  <td><?php echo $row['order_id']; ?></td>
  <td class="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></td>
  <td><?php echo $row['billing_charges']; ?></td>
  <td><?php echo $row['shipping_charges']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['first_name']; ?></td>


  <td><a href="ordview.php?view=<?php echo $row['order_id']; ?>">View</a></td>



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
</main>
<?php require_once('footer.php'); ?>
