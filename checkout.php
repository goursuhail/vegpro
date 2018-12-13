<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>


<html>
  <head>
    <title>Checkout</title>
  </head>
<body>
  <div class="container">
    <h1>Details</h1>
  <form action="#" method="post">
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="InputEmail1">Email address</label>
          <input type="email" class="form-control" id="InputEmail1"  placeholder="Enter email">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Enter Password">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input">Name</label>
          <input type="text" class="form-control" id="Input" placeholder="Enter Name">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input">Phone</label>
          <input type="text" class="form-control" id="Input" placeholder="Enter Phone Number">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input">Address</label>
          <input type="text" class="form-control" id="Input" placeholder="Enter Address">
        </div>
      </div>
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>


<?php require_once('footer.php'); ?>
