<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Historia.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Historia 
	</title>
	<meta charset="UTF-8" />
	<link rel = "stylesheet" type = "text/css" href = "css/Shop.css">
</head>
<body>
	<header>
		<h1>
			Tec e-Shop
		</h1>
		<p>Hola <?php echo $user['nombre']; ?></p>
	</header>
	<nav>
			<ul id="menu">
				<li> 
					<a style="text-decoration:none;" class="back" href="Home.php">Home</a> 
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Electrodomesticos.php">Electrodomesticos</a>  
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Hogar.php">Hogar</a>  
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Electronica.php">Electronica</a> 
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Entretenimiento.php">Entretenimiento</a> 
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Contactanos.php">Contacto</a>  
				</li>
			</ul>
		</nav>

		<main id="mainhistoria">
			<p>
				<span id = "historia">
				Todo inicio aquel dia 30 de octubre, justo despues de terminar examenes parciales, cuando la maestra Barbara nos informo que el proyecto se entregaba el dia 12 de noviembre. <br/>
				Por lo cual los dos alumnos se pusieron a la obra para poder crear la mejor pagina web que el mundo haya visto.
				</span>
			</p>

		</main>

</body>
</html>