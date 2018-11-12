<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Electrodomesticos.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Electrodomesticos 
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

		<main id="mainelecdom">

		
		<span id = "elecdom">
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
				<input type="hidden" name="producto" value="Refrigerador Samsung">
				<input type="hidden" name="precio" value="25999">
				<div align="center">Refrigerador Samsung 2 puertas<br/><br/>
					25,999.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


		<span id = "elecdom1">
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
				<input type="hidden" name="producto" value="Refrigerador Samsung 2">
				<input type="hidden" name="precio" value="57399">
				<div align="center">Refrigerador Samsung 2 puertas<br/><br/>
					57,399.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>

		<span id = "elecdom2">
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
				<input type="hidden" name="producto" value="Lavadora LG">
				<input type="hidden" name="precio" value="27999">
				<div align="center">Lavadora LG 22 Kg<br/><br/>
					27,999.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


	</main>

</body>
</html>