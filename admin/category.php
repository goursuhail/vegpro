
<?php require_once('header.php'); ?>
<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category</h1>

  </div>
<html>
  <head>
    <title>Category</title>
  </head>
  <body>
      <div class="container">

    <form action="catactfile.php" method="get">
      <div class="row">
        <div class="col col-md-6">
  <div class="form-group">
    <label for="cat">Category</label>
    <input type="text" class="form-control" id="cat" name="cate" placeholder="Enter Category"/>
  </div>
</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>
</main>
<?php require_once('footer.php'); ?>
