
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/4a67feb1fe.js" crossorigin="anonymous"></script>
<title>MENU PRINCIPAL!</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="<?=base_url('Css/Menu.css')?>">
<link rel="stylesheet" href="<?=base_url('iconos/fonts.css')?>">
<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="main.js"></script>
   
	
</head>
<body>
<?php
@session_start();
session_destroy();
header("Location: index.php");
?>
    <header>
    <a href="index" class="btn btn-dark" ><span class="icon-exit"></span>Exit</a>
	<a href="/MercadoDigital/public/Principal/mostrarMenu"><img class="logo1" src="/MercadoDigital/public/img/logo.jpg" alt="logo"></a>
      <div class="menu_bar">
			<a href="javascript:void(0)" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>

		<nav>
			<ul>
				<li><a href="/MercadoDigital/public/Principal/mostrarMenu"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="mostrarTecnologia"><span class="icon-display"></span>Tecnologia</a></li>
				<li><a href="#"><span class="icon-user-tie"></span>Ropa</a></li>
				<li><a href="#"><span class="icon-mug"></span>Articulos para Hogar</a></li>
				
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Todos los productos<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">SubElemento #1 <span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
						<li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				
				<li><a href="#"><span class="icon-phone"></span>Contacto</a></li>
			</ul>
		</nav>
    </header>

<main>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="/MercadoDigital/public/img/macbook1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/MercadoDigital/public/img/macbook2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/MercadoDigital/public/img/computer1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="title-cards">
		<h2>Productos mas vendidos</h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="/MercadoDigital/public/img/macbook1.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Computadora de Escritorio</h3>
		<p>Podemos crear la identidad corporativa de tu empresa. Diseño , Maquetación de folletos, Catálogos, Papelería y mucho más.</p>
		<a href="#">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="/MercadoDigital/public/img/macbook2.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Computadora portatil</h3>
		<p>Nosotros creamos y optimizamos tus perfiles en las Redes Sociales. Importantes para que tu presencia online sea completa.</p>
		<a href="#">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="/MercadoDigital/public/img/gopro2.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Gopro Hero 9 black</h3>
		<p>Creamos tu página web utilizando las últimas tecnologías disponibles. Una Web adaptativa a tu móvil o Tablet y con un gestor de contenido fácil.</p>
		<a href="#">Leer Màs</a>
	</div>
</div>
</div>
<footer>
&copy todo los derechos reservados!!!!!!
</footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>