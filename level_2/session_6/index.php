<?php include('data.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Book shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach($menu_links as $text=>$link){ ?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $link; ?>"><?php echo $text ?></a>
        </li>
      <?php } ?>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

    <?php foreach($home_slides as $index=>$image){ ?>


    <div class="carousel-item <?php if($index==0){echo 'active';} ?>">
      <img src="<?php echo $image; ?>" class="d-block w-100" alt="...">
    </div>  

    
   <?php } ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Books name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Harry Potter and the Sorcerers Stone</td>
      <td>Fantasy</td>
      <td>4400</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>The key house</td>
      <td>Fantasy</td>
      <td>2500</td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td>The secret lake</td>
      <td>Adventure,Mystery,Time travel</td>
      <td>3500</td>
    </tr>
    
    <tr>
      <th scope="row">4</th>
      <td>The secret library</td>
      <td>Fantasy,Mystery</td>
      <td>4500</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>The girl who walked on air</td>
      <td>Literary Fiction</td>
      <td>2500</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>The secret garden</td>
      <td>Fantasy/Magical Realism</td>
      <td>3000</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>The railway children</td>
      <td>Adventure / Family</td>
      <td>2000</td>
    </tr>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
