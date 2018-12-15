<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>


<html>
  <head>
    <title>Checkout</title>
  </head>
<body>
  <div class="container">
    <h1>Details</h1>
  <form action="order-process.php" method="post">
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="InputEmail1">Email address</label>
          <input type="email" class="form-control"  name="email" id="InputEmail1"  placeholder="Enter email">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control"  name="passwd" id="InputPassword1" placeholder="Enter Password">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input1">Name</label>
          <input type="text" class="form-control" name="nam" id="Input1" placeholder="Enter Name">
        </div>
      </div>
    </div>




    <div class="row">
      <div class="col col-md-3">
        <div class="form-group">
          <label for="Input2">date</label>
          <input type="text" class="form-control" name="date" id="Input2" placeholder="Enter Date">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input3">Phone</label>
          <input type="text" class="form-control" name="mobile" id="Input3" placeholder="Enter Phone Number">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
          <label for="Input">Address</label>
          <textarea rows="4" cols="50" class="form-control" name="addr" id="Input" placeholder="Enter Address"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-md-6">
        <div class="form-group">
            <label>City</label>
      <select name="city">
        <option value="1">Ajmer</option>
        <option value="1">Jaipur</option>
        <option value="1">Jodhpur</option>
        <option value="1">Delhi</option>
        <option value="1">Mumbai</option>
      </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col col-md-3">
      <div class="form-group">
          <label for="Input">Pin Code</label>
          <input type="text" class="form-control" name="pinc" id="Input" placeholder="Enter Pin Code">
    </div>
  </div>
</div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>


<?php require_once('footer.php'); ?>
