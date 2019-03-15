<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">#Admin User list</h1>

    <div class="container">
    <form class="form-inline">

    <div class="form-group mb-2">
    <select name="search_field">
      <option value="id">Id</option>
      <option value="user_name">First Name</option>
    </select>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">search</label>
    <input type="text" class="form-control" name="search" id="inputPassword2" placeholder="search....">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</div>
<!-- add new  button -->
    <div class="btn-toolbar mb-2 mb-md-0">
     <div class="btn-group mr-2">
       <a  class="btn btn-sm btn-outline-secondary" href="adminu.php">Add New</a>
    </div>

    </div>
  </div>

<?php
try{

    $search = '';

    if(isset($_GET['search']) && $_GET['search'] != ''){
      $search = $_GET['search'];
    }

    $query = 'SELECT * FROM admin_user';

    if($search != ''){
      $query = $query." WHERE ".$_GET['search_field']." = '".$search."'";
    }

    //echo $query;

    $stmt = $conn->query($query);
?>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>


    </tr>
  </thead>
  <tbody>

<?php
    while($row = $stmt->fetch()){

?>

<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['user_name']; ?></td>
  <td><?php echo $row['first_name']; ?></td>
  <td><?php echo $row['last_name']; ?></td>
  <td><?php echo $row['password']; ?></td>


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
