<?php include('../data.php');
include('Product.php');
$products = Product::readAll();

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

        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Text</th>
              <th scope="col">Page</th>
              <th scope="col">Language</th>
              <th scope="col">Category</th>
              <th scope="col">Author</th>
              <th scope="col">Year</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach($products as $key=>$product){ ?>
            <tr>
              <th scope="row"><?php echo $product['id']; ?></th>
              <td><?php echo $product['title']; ?></td>
              <td><img src="<?php echo $product['image']; ?>" width="100"></td>
              <td><?php echo $product['text']; ?></td>
              <td><?php echo $product['page']; ?></td>
              <td><?php echo $product['language']; ?></td>
              <td><?php echo $product['category']; ?></td>
              <td><?php echo $product['author']; ?></td>
              <td><?php echo $product['year']; ?></td>
              <td><?php echo $product['price']; ?></td>
            <td>
              <a class="btn btn-primary">Update</a>
              <a class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
