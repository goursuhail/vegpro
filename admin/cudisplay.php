<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customer list</h1>

  </div>

<?php
try{

    $stmt = $conn->query('SELECT * FROM customer');
?>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Customer Id</th>

      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>


    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>
  <td><?php echo $row['customer_id']; ?></td>

  <td><?php echo $row['first_name']; ?></td>
  <td><?php echo $row['last_name']; ?></td>
  <td><?php echo $row['date']; ?></td>
  <td><a href="cuedit.php?edit=<?php echo $row['customer_id']; ?>">Edit</a></td>


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
