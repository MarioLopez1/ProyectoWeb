<?php
    session_start();
    $user=$_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Carrito 
	</title>
	<meta charset="UTF-8" />
	<link rel = "stylesheet" type = "text/css" href = "css/Shop.css">
</head>
<body>
	<header>
		<h1>
			Tec e-Shop
		</h1>
	</header>
		<h3>
			Gracias por comprar con nosotros <?php echo $user['nombre']; ?>
		</h3>
	<a style="text-decoration:none;" class="hip" href="Home.php"> Salir </a>	
</body>