<?php include('data.php');

$book=$books[$_GET['hamar']];

 ?>
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

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="<?php echo $book['image']; ?>" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Name: <?php echo $book['title']; ?></h5>
        <p class="card-text">Text: <?php echo $book['text']; ?></p>
        <p class="card-text">Price: <?php echo $book['price']; ?></p>
        <p class="card-text">Page: <?php echo $book['page']; ?></p>
        <p class="card-text">Language: <?php echo $book['language']; ?></p>
        <p class="card-text">Author: <?php echo $book['author']; ?></p>
        <p class="card-text">Year: <?php echo $book['year']; ?></p>

      
      </div>
    </div>
  </div>
</div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
