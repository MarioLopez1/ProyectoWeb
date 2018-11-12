<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Hogar.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Hogar 
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


		<main id="mainhogar">

		
		<span id = "hogar">
			<!--<input class= "carrito" type = "submit" value = "Agrega al carrito"/>-->
			<form method="post" action="controller/registerPedido.php">
				<input type="hidden" name="action" value="add">
				<select class="select" name="cantidad">
					<option value = "0" selected disabled hiden> Cantidad... </option>
					<option value = "1"> 1 </option>
					<option value = "2"> 2 </option>
					<option value = "3"> 3 </option>
					<option value = "4"> 4 </option>
					<option value = "5"> 5 </option>
				</select>
				<!--<div name="user" value = "<?php $user['user']; ?>"> </div>-->
				<input type="hidden" name="user" value="<?php echo $user['user']; ?>">
				<input type="hidden" name="producto" value="Cafetera">
				<input type="hidden" name="precio" value="499">
				<div align="center" value="Cafetera">Cafetera<br/><br/>
					499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>

			<!--<div align="center">Cafetera<br/><br/>
				499.00 M.N<br/>
			</div>-->	
		</span>


		<span id = "hogar1">
			<form method="post" action="controller/registerPedido.php">
				<input type="hidden" name="action" value="add">
				<select class="select" name="cantidad">
					<option value = "0" selected disabled hiden> Cantidad... </option>
					<option value = "1"> 1 </option>
					<option value = "2"> 2 </option>
					<option value = "3"> 3 </option>
					<option value = "4"> 4 </option>
					<option value = "5"> 5 </option>
				</select>
				<input type="hidden" name="user" value="<?php echo $user['user']; ?>">
				<input type="hidden" name="producto" value="Procesador de Alimentos">
				<input type="hidden" name="precio" value="1599">
				<div align="center">Procesador de alimentos<br/><br/>
					1,599.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>	
		</span>

		<span id = "hogar2">
			<form method="post" action="controller/registerPedido.php">
				<input type="hidden" name="action" value="add">
				<select class="select" name="cantidad">
					<option value = "0" selected disabled hiden> Cantidad... </option>
					<option value = "1"> 1 </option>
					<option value = "2"> 2 </option>
					<option value = "3"> 3 </option>
					<option value = "4"> 4 </option>
					<option value = "5"> 5 </option>
				</select>
				<input type="hidden" name="user" value="<?php echo $user['user']; ?>">
				<input type="hidden" name="producto" value="Bateria de Cocina">
				<input type="hidden" name="precio" value="1299">
				<div align="center">Bateria de cocina<br/><br/>
					1,299.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>
	</main>
</body>
</html>