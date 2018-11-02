
<?php require_once('header.php'); ?>
<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category Edit</h1>

  </div>
<html>
  <head>
    <title>Category Edit</title>
  </head>
  <body>
      <div class="container">

        <?php
          $db_server = 'localhost';
          $db_user = 'root';
          $db_password = 'mysql';
          $db_name = 'vegetable';




          try{
            $conn = new PDO('mysql:host='.$db_server.';dbname='.$db_name, $db_user, $db_password);
            $stmt = $conn->query('SELECT * FROM `category` WHERE category.category_id ='. $_GET['edit']);
            $row  = $stmt->fetch(PDO::FETCH_ASSOC);

          //  print_r($row);
          }catch(PDOException $e){

          }
          ?>

    <form action="caupfile.php" method="get">
      <div class="row">
        <div class="col col-md-6">
  <div class="form-group">
    <label for="cat">Category</label>
    <input type="text" class="form-control" id="cat" name="cate" value="<?php echo $row['category_name']; ?>" placeholder="Enter Category"/>
  </div>
</div>
</div>
<input type="hidden" name="category_id" value="<?php echo $row['category_id']; ?>" />
<input type="submit" class="btn btn-primary" value="update" />
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php'); ?>
