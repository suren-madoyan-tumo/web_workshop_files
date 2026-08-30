<?php 
	
	echo "<h1>task 2.3</h1>";

	function gumar($a, $b){
		return $a + $b;
	}

	echo gumar (5,6);

	function printComponent($n){
		for ($i=0; $i < $n; $i++) { 
			echo '<div class="alert alert-danger" role="alert">
				  A simple danger alert—check it out!
				</div>';
		}
	}

	function createArray($a, $b, $c, $d, $e, $f){
		return array($a, $b, $c, $d, $e, $f);
	}
		
	echo '<br>';
	
	print_r(createArray('apple', 'peach', 'straberry', 'orange', 'pineapple', 'banana'));

	echo '<br>';

	function printArray($data, $number){
		for ($i=0; $i < $number; $i++) { 
			echo $i;
				echo '<br>';	
			foreach ($data as $key => $value) {
				echo $value;
				echo '<br>';
			}
		}
	}

	$fruits = array('apple', 'peach', 'straberry', 'orange', 'pineapple', 'banana');

	printArray($fruits, 5);



	echo "<h1>task 2.5</h1>";

	function productCard ($data, $component){
		
		if ($component == 'card'){
			echo '<div class="card" style="width: 18rem;">
			  <img src="'.$data['image'].'" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">'.$data['title'].'</h5>
			    <p class="card-text">'.$data['info'].'</p>			    
			    <p class="card-text">$ '.$data['price'].'</p>
			    <a href="#" class="btn btn-primary">Buy</a>
			  </div>
			</div>';
		}

		if ($component == 'horizontal'){
			echo '<div class="card mb-3" style="max-width: 540px;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="'.$data['image'].'" class="img-fluid rounded-start" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">'.$data['title'].'</h5>
				        <p class="card-text">'.$data['info'].'</p>	    
					    <p class="card-text">$ '.$data['price'].'</p>
					    <a href="#" class="btn btn-primary">Buy</a>
				      </div>
				    </div>
				  </div>
				</div>';
		}

		if ($component == 'colored'){
			if($data['price']>=1000){ $color='danger';}
			elseif($data['price']<1000){ $color='success';}
			else{$color='primary';}

			echo '<div class="card border-'.$color.' mb-3" style="max-width: 18rem;">
				  <div class="card-header">Product</div>
				    <div class="col-md-4">
				      <img src="'.$data['image'].'" class="img-fluid rounded-start" alt="...">
				    </div>
				  <div class="card-body text-'.$color.'">
				    <h5 class="card-title">'.$data['title'].'</h5>
				    <p class="card-text">'.$data['info'].'</p>
				    <p class="card-text">$ '.$data['price'].'</p>
				    <a href="#" class="btn btn-'.$color.'">Buy</a>
				  </div>
				</div>';
		}
	}


	$product = array(
		'title'=>'Mercedes',
		'price'=>100,
		'image'=>'https://di-uploads-pod3.dealerinspire.com/fletcherjonesmbnewport/uploads/2025/01/mercedes-benz-g-class-electric-suv-hub-image-updated-01.png',
		'info'=>'1995, black, ATT',
	);


 ?>

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <?php printComponent(5); ?>
    <?php productCard($product, 'card'); ?>
    <?php productCard($product, 'horizontal'); ?>
    <?php productCard($product, 'colored'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>