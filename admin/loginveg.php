<html>
<head>
  <title>A-Z vegiii</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css">
  body{
    background: #eee;
  }
  .container{
    border: 1px solid gray;
    border-radius: 5px 5px;
    width: 50%;
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
  <form action="lovgfile.php" method="post">
    <div class="row">
      <div class="col col-md-6">
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="user" name="uname"  placeholder="Enter Username"/>
  </div>
</div>
</div>
  <div class="row">
    <div class="col col-md-6">
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"/>
  </div>
</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
