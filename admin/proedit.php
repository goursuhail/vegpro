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




              <div class="container">
                <?php





                  try{

                    $stmt = $conn->query('SELECT * FROM `product` WHERE product.product_id ='. $_GET['edit']);
                    $row  = $stmt->fetch(PDO::FETCH_ASSOC);

                  // print_r($row);
                  }catch(PDOException $e){

                  }
                  ?>

              <form action="proupdate.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col col-md-6">
                    <div class="form-group">
                      <label for="nam">Name</label>
                     <input type="text" class="form-control" id="nam" name="usname" value="<?php echo $row['name']; ?>"  placeholder="Enter Product Name"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
            <div class="form-group">
              <label for="pri">Price</label>
              <input type="text" class="form-control" id="pri" name="pric" value="<?php echo $row['price']; ?>" placeholder="Enter Product Price"/>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
              <div class="form-group">
                <label for="sto">Stock</label>
                <input type="text" class="form-control" id="sto" name="stoc" value="<?php echo $row['stock']; ?>" placeholder="Enter Stock"/>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-md-6">
              <div class="form-group">
                <label for="sto">Category</label>
                <select name="category" class="form-control">
                    <?php
                      foreach ($categories as $id => $category) {
                        if($id == $row['category_id']){
                          ?>
                          <option selected value="<?php echo $id; ?>"><?php echo $category; ?></option>
                          <?php
                        }else{
                          ?>
                          <option value="<?php echo $id; ?>"><?php echo $category; ?></option>
                          <?php
                        }

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
              <br/>

              <?php
              if($row['product_image'] != ''){
                ?>
                <img src="<?php echo $row['product_image']; ?>" height="100px"/>                 //uploads/product_item<?php echo $row['product_id']; ?>.jpg
                <?php
              }
              ?>

            </div>
          </div>
          </div>



          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" />
          <input type="submit" class="btn btn-primary" value="update" />

          </form>

          </div>

        </main>


<?php require_once('footer.php') ?>
