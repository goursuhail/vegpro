<?php require_once('header.php'); ?>
<?php require_once('db.php'); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customer list</h1>


    <div class="container">
    <form class="form-inline">

    <div class="form-group mb-2">
    <select name="search">
      <option>Id</option>
      <option>First Name</option>
    </select>
  </div>

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">search</label>
    <input type="text" class="form-control" name="search-field" id="inputPassword2" placeholder="search....">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</div>

  </div>

<?php
try{

    $per_page = 10;
    $curr_page = 1;

    if(isset($_GET['page'])){
      $curr_page = $_GET['page'];
    }

    $limit_start = ($curr_page - 1) * $per_page;

    $limit = ' limit '.$limit_start.', '.$per_page;
    $query = 'SELECT * FROM customer';

    // run query to get total data
    $stmt = $conn->query($query);

    $total = $stmt->rowCount();

    $pages = $total/$per_page;

    if($total % $per_page > 0){
      $pages++;
    }
   // Run actual query
    $stmt = $conn->query($query.' '.$limit)
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
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php
        for($i = 1; $i <= $pages; $i++){

          $active = '';
          if($i == $curr_page){
            $active = 'active';
          }
          ?>
            <li class="page-item <?php echo $active; ?>">
              <a class="page-link" href="http://localhost/vegpro/admin/cudisplay.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
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
