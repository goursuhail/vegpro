<html>
  <head>
    <title>Front-login</title>
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">">
    <style type="text/css">

      body{
        background: #eee;
      }

      .container{
        border: 1px solid gray;
        width: 50%;
        border-radius: 5px 5px;
        margin: 100px auto;
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="container">
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
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group">
              <label for="user">Username</label>
              <input type="text" class="form-control" id="user" name="uname"  placeholder="Enter username"/>
            </div>
          </div>
        </div>

          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="password">password</label>
              <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password"/>
            </div>
          </div>
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </body>
</html>
