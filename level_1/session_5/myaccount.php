<?php include('data.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><?php echo $site_title; ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loop.php">Loop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div class="container mt-2">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body text-center">
              <img src="https://californiamuseum.org/wp-content/uploads/Zuckerberg-Cropped-Black-and-White-Resized-scaled.jpg" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">John Doe</h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">San Francisco, CA</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary me-2">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0 shadow-sm">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://example.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg text-body"></i>
                  <p class="mb-0"><?php echo $_POST['username']; ?></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3"><p class="mb-0">Full Name</p></div>
                <div class="col-sm-9"><p class="text-muted mb-0"><?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?></p></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3"><p class="mb-0">Email</p></div>
                <div class="col-sm-9"><p class="text-muted mb-0"><?php echo $_POST['email']; ?></p></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3"><p class="mb-0">Phone</p></div>
                <div class="col-sm-9"><p class="text-muted mb-0">(097) 234-5678</p></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3"><p class="mb-0">Address</p></div>
                <div class="col-sm-9"><p class="text-muted mb-0">Bay Area, San Francisco, CA</p></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mb-md-0 shadow-sm">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Project Status</span> Overview</p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar w-75" role="progressbar"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar bg-danger w-50" role="progressbar"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>