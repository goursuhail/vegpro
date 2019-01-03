<?php require_once('db.php'); ?>
<?php require_once('header.php'); ?>


  <head>
    <title>Front-login</title>

    <style type="text/css">

      body{
        background: #eee;
      }


    </style>
  </head>
  <body>
    <div class="container">
        <h1>Login</h1>

        <?php
        if(isset($_GET['message']) && $_GET['message'] == 'fail'){
      ?>
              <div class="alert alert-danger" role="alert">
                  Login Failed. Username or Password invalid
              </div>
      <?php
      }
      ?>
      <form action="logfile-front.php" method="post">
        <div class="login-process">
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
              <label for="password"><strong>password</strong></label>
              <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password"/>
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
