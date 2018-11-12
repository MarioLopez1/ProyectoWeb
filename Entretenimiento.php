<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Entretenimiento.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Entretenimiento 
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
				<a style="text-decoration:none;" class="back" href="car.php">Carrito</a> 
			</li>
			<li> 
				<a style="text-decoration:none;" class="back" href="Contactanos.php">Contacto</a>  
			</li>
		</ul>
	</nav>

	<main id="mainentre">

		
		<span id = "entre">
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
				<input type="hidden" name="producto" value="Xbox One S">
				<input type="hidden" name="precio" value="6499">
				<div align="center">Xbox One S<br/><br/>
					6,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


		<span id = "entre1">
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
				<input type="hidden" name="producto" value="Nintendo Switch">
				<input type="hidden" name="precio" value="7499">
				<div align="center">Nintendo Switch<br/><br/>
					7,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>

		<span id = "entre2">
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
				<input type="hidden" name="producto" value="Playstation 4">
				<input type="hidden" name="precio" value="7499">
				<div align="center">Playstation 4<br/><br/>
					7,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


	</main>

</body>
</html>