<?php
 require_once('header.php');
 require_once('db.php');
?>

<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}

$status = get_status($conn);
?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
          </div>


          <html>
            <head>
              <title>Orders</title>

            </head>
            <body>

              <div class="container">

              <form action="ordacfile.php" method="get">
                <div class="row">
                  <div class="col col-md-6">
                    <div class="form-group">
                      <label for="sta">Status</label>
                     <select name="status" class="form-control">
                    <?php
                    foreach ($status as $id => $status) {
                      ?>
                          <option  value="<?php echo $id; ?>"><?php echo $status; ?></option>
                      <?php

                    }

                  ?>

                     </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
            <div class="form-group">
              <label for="bill">Billing charges</label>
              <input type="text" class="form-control" id="bill" name="billchar" placeholder="Enter Product billing charges"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="ship">Shipping Charges</label>
              <input type="text" class="form-control" id="ship" name="shipchar" placeholder="Enter Product Shipping charges"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="no">Phone</label>
              <input type="text" class="form-control" id="no" name="mobile" placeholder="Enter Phone Number"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="cus">Customer Name</label>
              <input type="text" class="form-control" id="cus" name="cust" placeholder="Enter customer name"/>
            </div>
          </div>
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
            </body>
          </html>
        </main>


<?php require_once('footer.php') ?>
