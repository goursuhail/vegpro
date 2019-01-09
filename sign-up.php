<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>


  <head>
    <title>Sign-Up</title>

    <style type="text/css">

      body{
        background: #eee;
      }


    </style>
  </head>
  <body>
    <div class="container">
        <h1>Sign-Up</h1>


      <form action="signup-file.php" method="post">
        <div class="signup-process">
          <div class="row">
            <div class="col col-md-12">
              <div class="form-group">
                <label for="user"><strong>Email</strong></label>
                <input type="email" class="form-control" id="user" name="mail"  placeholder="Enter Email"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-12">
              <div class="form-group">
                <label for="user"><strong>Password</strong></label>
                <input type="password" class="form-control" id="user" name="passwd"  placeholder="Enter Password"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-12">
              <div class="form-group">
                <label for="user"><strong>Name</strong></label>
                <input type="text" class="form-control" id="user" name="nam"  placeholder="Enter Name"/>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col col-md-12">
            <div class="form-group">
              <label for="user"><strong>Username</strong></label>
              <input type="text" class="form-control" id="user" name="uname"  placeholder="Enter username"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-12">
            <div class="form-group">
              <label for="user"><strong>Phone</strong></label>
              <input type="text" class="form-control" id="user" name="mobile"  placeholder="Enter Phone Number"/>
            </div>
          </div>
        </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
    </div>
  </body>
</html>

<?php require_once('footer.php'); ?>
