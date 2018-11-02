
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="vegetables">
    <meta name="author" content="suhail">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard for A-Z vegii</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">A-Z vegiii</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logoutveg.php">log out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catdisplay.php">
                  <span data-feather="file"></span>
                  Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prodisplay.php">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>


            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Admin panel</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="addisplay.php">
                  <span data-feather="file-text"></span>
                  Admin user
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cudisplay.php">
                  <span data-feather="file-text"></span>
                  Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="orddisplay.php">
                  <span data-feather="file-text"></span>
                  Orders
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>
