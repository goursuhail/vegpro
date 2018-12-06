<?php
require_once('header.php');
require_once('db.php');

?>
<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}

  $categories = get_categories($conn);

?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Product</h1>
          </div>


          <html>
            <head>
              <title>Product</title>

            </head>
            <body>

              <div class="container">

              <form action="proacfile.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col col-md-6">
                    <div class="form-group">
                      <label for="nam">Name</label>
                     <input type="text" class="form-control" id="nam" name="usname"  placeholder="Enter Product Name"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
            <div class="form-group">
              <label for="pri">Price</label>
              <input type="text" class="form-control" id="pri" name="pric" placeholder="Enter Product Price"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="sto">Stock</label>
              <input type="text" class="form-control" id="sto" name="stoc" placeholder="Enter Stock"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="des">description</label>
              <input type="text" class="form-control" id="des" name="desc" />
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="sto">category</label>
              <select name="category" class="form-control">
                <?php
                  foreach ($categories as $id => $category) {
                    ?>
                        <option  value="<?php echo $id; ?>"><?php echo $category; ?></option>
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
              <label for="up">Select files</label>
              <input type="file" class="form-control" id="up" name="file" />
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
