<?php
 require_once('header.php');
 require_once('db.php');
?>

<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: loginveg.php');
}


?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Contact request</h1>
          </div>

          <html>
            <head>
              <title>Contact us</title>
              <style type="text/css">
              .conatainer{
                border: 1px solid gray;
              }
              </style>
            </head>
            <body>
              <div class="container">
                <h1>Submit customer service request</h1>
                <p>If you have a question about our service or have an issue to report, please send a request and we will get back to you as soon as possible.</p>
                <p>All fields with an asterisk (*) are mandatory</p>
                <form action="contact-file-admin.php" method="post">
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form-group">
                        <label for="user">Name</label>
                        <input type="text" class="form-control" id="user" name="nam"  placeholder="Enter Name"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form-group">
                        <label for="user">Your email</label>
                        <input type="eamil" class="form-control" id="user" name="mail"  placeholder="Enter eamil"/>
                      </div>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col col-md-6">
                      <div class="form-group">
                        <label for="pass">Subject</label>
                        <input type="text" class="form-control" id="pass" name="sub" placeholder="Enter subject"/>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col col-md-6">
                      <label>Message</label>
                      <textarea  name="mess" rows="4" col="50"></textarea>
                    </div>
                    </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
            </body>
          </html>


        </main>


<?php require_once('footer.php') ?>
