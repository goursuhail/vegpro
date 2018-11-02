<?php require_once('header.php') ?>

<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">customer</h1>
          </div>



<html>
  <head>
    <title>customer</title>

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
          $stmt = $conn->query('SELECT * FROM `customer` WHERE customer.customer_id ='. $_GET['edit']);
          $row  = $stmt->fetch(PDO::FETCH_ASSOC);

        //  print_r($row);
        }catch(PDOException $e){

        }
        ?>

    <form action="cuupfile.php" method="get">

      <div class="row">
        <div class="col col-md-6">
  <div class="form-group">
    <label for="Fname">Firstname</label>
    <input type="text" class="form-control" id="Fname" name="finame" value="<?php echo $row['first_name']; ?>" placeholder="Enter Firstname"/>
  </div>
</div>
</div>
<div class="row">
  <div class="col col-md-6">
  <div class="form-group">
    <label for="lname">Lastname</label>
    <input type="text" class="form-control" id="lname" name="laname" value="<?php echo $row['last_name']; ?>" placeholder="Enter Lastname"/>
  </div>
</div>
</div>
<div class="row">
  <div class="col col-md-6">
  <div class="form-group">
    <label for="da">Date</label>
    <input type="password" class="form-control" id="da" name="dat" value="<?php echo $row['date']; ?>" placeholder="Enter Date"/>
  </div>
</div>
</div>
<input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>" />
<input type="submit" class="btn btn-primary" value="update" />
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php') ?>
