<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>King Burger</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="shortcut icon" href="images/logo.png">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<a class="logo" href="index.php" title="Home">
				<img src="images/kingburger.png" alt="KingBurger" title="KingBurger">
			</a>
			<a href="#" id="menu">
		    	<i class="fas fa-bars"></i>
		    </a>
		    <ul>
		        <li><a href="home" title="Home">Home</a></li>
		     	<li><a href="sobre" title="Sobre">Sobre</a></li>
		    	<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
		    	<li><a href="contato" title="Contato">Contato</a></li>
		    </ul>
		</nav>
		<div class="clear"></div>
		<div id="banner">
			<div class="banner-msg">
				<h1>Mega Max Burger</h1>
				<p>4 Hamburgueres de Carne de Boi, mais 500 gramas de Bacon!</p>
			</div>
			<img src="images/10.png" alt="Max Mega Burger" title="Max Mega Burger" class="banner-img">
		</div>
	</header>
	<main>
		<?php if(isset($_GET["param"])): ?>
			<?php $pagina = $_GET["param"]; ?>
		<?php else: ?>
			<?php $pagina = "home"; ?>
		<?php endif; ?>
		<?php $pagina = "paginas/".$pagina.".php"; ?>
		<?php if (file_exists($pagina)): ?>
			<?php include $pagina; ?>
		<?php else: ?>
			<?php include "paginas/erro.php"; ?>
		<?php endif; ?>
	</main>
	<div class="bacon"></div>
	<footer>
		<p class="center">
			Desenvolvido por Jonas Daniel Hermany &copy; 2018
		</p>
	</footer>
	<script type="text/javascript">
		$("#menu").click( function() {
			$("nav ul").toggle();
		});
	</script>
</body>
</html>