<?php  
	if(isset($_GET["exito"])){
		echo "<script type='text/javascript'>alert('Registro Exitoso')</script>";
	}

	if(isset($_GET["ingre"])){
		echo "<script type='text/javascript'>alert('Ha ingresado con exito')</script>";
	}
?>
<!DOCTYPE html>

<html Lang="en">
	<head>
		<title>R&R Shop | Inicio</title>
			<link rel="shortcut icon" href="img/NEW.png">
			<meta charset="UTF-8">
			<link rel="stylesheet" href="css/estilo.css">
			<script src="htt://code.jquery.com/jquery-lastest.js"></script>
			<script src="header.js"></script>
	</head>
	
	<body>
		<header class="">
			<div class="wrapper">
			<div class="logo">R&R Shop</div>
			<nav>
				<a href="index.php"class="select">Inicio</a>
				<a href="tienda.html" >Tienda</a>
				<a href="conocenos.html">Conocenos</a>
				<a href="novedades.html">Novedades</a>
				<a href="registro.php">Login</a>
				<a href="registro.php">Ayuda</a>
			</nav>
			</div>
		</header>
			<main>
				<section id="banner">
					<img src="img/banner.jpg" alt="img/banner.jpg">
						<div class="contenedor">	
							<h2 class="banner__titulo">MODA HECHA REALIDAD</h2>
							<p class="banner__txt">Una marca especializada en dar propuestas fresca a personas de hoy en día</p>
							<a class="banner__txt" href="conocenos.html">Leer más</a>
						</div>
				</section>
				<section id="Bienvenidos">
					<h2>PIEZAS UNICAS</h2>
					<p>QUE NO SE TE ESCAPEN, COMPRA AHORA</p>
				</section>
				<section id="blog">
					<div class="contenedor">
						<article>
							<img src="img/watermelon.png" alt="img/watermelon.png">
							<h4>WATERMELON</h4>
						</article>
						<article>
							<img src="img/zombie.png" alt="img/zombie.png">
							<h4>ZOMBIE</h4>
						</article>
						<article>
							<img src="img/bad.png" alt="img/bad.png">
							<h4>BAD</h4>
						</article>
						<article>
							<img src="img/marvel.png" alt="img/marvel.png">
							<h4>MARVEL</h4>
						</article>
					</div>
				</section >
				<section id="descuento">
					<div class="contenedor">
						<article>
							<img src="img/descuento.png" alt="img/descuento.png">
						</article>
					</div>
				</section>
				<section id="info">
					<div class="contenedor">
						<div class="info-shop">
							<img src="img/NEW.png" alt="img/NEW.png">
							<h4>PRIMAVERA</h4>
						</div>
						<div class="info-shop">
							<img src="img/NEW.png" alt="img/NEW.png">
							<h4>VERANO</h4>
						</div>
						<div class="info-shop">
							<img src="img/NEW.png" alt="img/NEW.png">
							<h4>OTOÑO</h4>
						</div>
						<div class="info-shop">
							<img src="img/NEW.png" alt="img/NEW.png">
							<h4>INVIERNO</h4>
						</div>
					</div>
				</section>
			</main>
			<footer>
				<div class="contenedor">
					<p class="copy"> R&R Shop &copy; 2018</p>
					<div class="sociales">
						<img src="img/facebook.png" alt="img/facebook.png">
						<img src="img/twitter.png" alt="img/twitter.png">
						<img src="img/instagram.png" alt="img/instagram.png">
						<img src="img/google-plus.png" alt="img/google-plus.png">
					</div>
				</div>
			</footer>
	</body>
</html>