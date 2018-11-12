<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Home.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Home
	</title>
	<meta charset="UTF-8" />
	<link rel = "stylesheet" type = "text/css" href = "css/Shop.css">
</head>
<body id="bodyhome">
	<header>
		<h1>
			Tec e-Shop

			<!--<input class="button_submit" type = "submit" value = "Log In"/>-->
			<a style="text-decoration:none;" class="enlace" href="login1.php">Login</a>
			<a style="text-decoration:none;" class="enlace2" href="controller/logout.php?logout">Logout</a>
			<!--<input class="button_submit" type = "submit" value = "Log Out"/>-->
		</h1>
		<p>Hola <?php echo $user['nombre']; ?></p>
	</header>
	<nav>
			<ul id="menu">
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
					<a style="text-decoration:none;" class="back" href="car.php">Carrito</a> 
				</li>
				<li> 
					<a style="text-decoration:none;" class="back" href="Contactanos.php">Contacto</a>  
				</li>
			</ul>
		</nav>
		<a href="https://www.freepik.es/fotos-vectores-gratis/fondo"></a>

</body>
</html>