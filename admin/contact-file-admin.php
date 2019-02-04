<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">#Contact request</h1>

    <!-- search bar -->
    <div class="container">
    <form class="form-inline">

    <div class="form-group mb-2">
    <select name="search_field">
      <option value="request_id">Id</option>
      <option value="name">Name</option>
    </select>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">search</label>
    <input type="text" class="form-control" name="search" id="inputPassword2" placeholder="search....">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</div>

  </div>

<?php
try{

  $search = '';

  if(isset($_GET['search']) && $_GET['search'] != ''){
    $search = $_GET['search'];
  }

    $query = "SELECT * FROM `customer_request`";

    if($search != ''){

      $query = $query." WHERE ".$_GET['search_field']." = '".$search."'";
    }

    //echo $query;
    $stmt = $conn->query($query);
?>


<table class="table">
  <thead class="thead-light">
    <tr>


      <th scope="col">Request Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>

    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>


  <td><?php echo $row['request_id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['subject']; ?></td>
  <td><?php echo $row['message']; ?></td>



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
