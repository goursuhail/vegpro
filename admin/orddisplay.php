<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">#Order</h1>
    <div class="btn-toolbar mb-2 mb-md-0">


     <div class="btn-group mr-2">
       <a  class="btn btn-sm btn-outline-secondary" href="order.php">Add New</a>
    </div>

    </div>
  </div>

<?php
try{


  $per_page = 10;
  $curr_page = 1;

  if(isset($_GET['page'])){
    $curr_page = $_GET['page'];               //limit 5 , 10
  }

  $limit_start = ($curr_page - 1) * $per_page;

  $limit = ' limit '.$limit_start.', '.$per_page;


    $query = "SELECT * FROM `orders` JOIN `customer` ON `orders`.`customer_id` = `customer`.customer_id";

    //run query to get total row
    $stmt = $conn->query($query);

    $total = $stmt->rowCount();

  //  print_r($total);

  $pages = $total/$per_page;

  if($total % $pages > 0){
    $pages++;
  }

  //run actual $query

  $stmt = $conn->query($query.''.$limit);
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

  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
        for ($i = 1; $i <= $pages; $i++){

          $active = '';
          if($i == $curr_page){
            $active = 'active';
          }
          ?>

          <li class="page-item <?php echo $active; ?>">
            <a class="page-link" href="http://localhost/vegpro/admin/orddisplay.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
          </li>
          <?php
        }
        ?>

    </ul>
  </nav>
  <?php
}catch(PDOException $e){

}

?>
</main>
<?php require_once('footer.php'); ?>
