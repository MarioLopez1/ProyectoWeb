<?php
	//include("dataAccess/dbConnect.php");
	//include("dataAccess/carritoDAO.php");
    session_start();
    $user=$_SESSION['user'];
    //$carrito=$_SESSION['carrito'];
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

		<main>
			<?php
				//$username = $user['user'];
				//$db = getDB();
				//$carritoDAO = new carritoDAO($db);
				//$carrito = $carritoDAO->getPedido($username);
				//$_SESSION['carrito']=$carrito;
				//$carrito1=$_SESSION['carrito'];
				//echo "Producto: ".$carrito['producto'], " - Cantidad: ".$carrito['cantidad'], " - Precio: ".$carrito['precio'];
				$link = new PDO('mysql:host=localhost;dbname=user', 'root', '');

				$valor=$user['user'];
				$tot=0;

				foreach ($link->query('SELECT * from carrito') as $row){
						if($user['user'] == $row['user']){?>
						<div>
						<?php echo "Producto: ".$row['producto'], " - Cantidad: ".$row['cantidad'], " - Precio: $".$row['precio']."\n";
						$tot=$tot+$row['cantidad']*$row['precio']; ?>
						<form method="post" action="controller/eliminarPedido.php">
							<input type="hidden" name="user" value="<?php echo $user['user']; ?>">
							<input type="hidden" name="producto" value="<?php echo $row['producto']; ?>">
							<input type="submit" name="eliminarproducto" value="Eliminar">
						</form></div></br>
						<?php }} ?>
						
						<p align="right"> Total: $<?php echo $tot; ?> </p> 
						<a style="text-decoration:none;" align="right" class="hip" href="gracias.php"> Comprar </a>	
		</main>

</body>
</html>