<?php
	include_once "conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	<title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
	<?php
		include_once "Menu.php";
	?>
	<form  method="POST">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
					    <div class="carousel-indicators">
					      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
					    </div>
					    <div class="carousel-inner">
					      <div class="carousel-item active">
					        <img src="Carrosel/cu.jpg" width="100%">
					        <div class="container">
					          <div class="carousel-caption text-start">
					            <h1>Example headline.</h1>
					            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
					            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
					          </div>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <img src="Carrosel/noia.jpg" width="100%">
					        <div class="container">
					          <div class="carousel-caption">
					            <h1>Another example headline.</h1>
					            <p>Some representative placeholder content for the second slide of the carousel.</p>
					            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
					          </div>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <img src="Carrosel/coisa.jpg" width="100%">
					        <div class="container">
					          <div class="carousel-caption text-end">
					            <h1>One more for good measure.</h1>
					            <p>Some representative placeholder content for the third slide of this carousel.</p>
					            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
					          </div>
					        </div>
					      </div>
					    </div>
					    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					      <span class="visually-hidden">Previous</span>
					    </button>
					    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					      <span class="carousel-control-next-icon" aria-hidden="true"></span>
					      <span class="visually-hidden">Next</span>
					    </button>
				  	</div>

					<div class="row">
				  	<?php

				  	$queryselet = "SELECT * FROM promocao";

				  	$querycon = mysqli_query($conn,$queryselet);

					while ($row_selet = mysqli_fetch_assoc($querycon)) 
				  	{
				  		echo '
							<div class="col">
								<br>
								<div class="gradprod">
								  	<center>
								  		<img src="' . $row_selet['IMAGEM'] . '">
								  		<h6>' . $row_selet['DESCRICAO'] . '</h6>
								  		<h6>R$' . $row_selet['PRECO'] . '</h6>
								  	</center>

								 </div>
							</div>';			
				  	}
					?>
					</div>
				</div>
			</div>
		</div>
	</form>
	<br>
	<footer class="rodape">
		<img src="logo/logo.png" width="40px" style="display: inline-block;">
		<h6 style="display: inline-block;">©My e commerce</h6>
		<hr>
	</footer>
</body>
</html>