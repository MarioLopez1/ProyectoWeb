<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Electronica.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Electronica 
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

		<main id="mainelec">

		
		<span id = "elec">
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
				<input type="hidden" name="producto" value="TV Sony LED 55">
				<input type="hidden" name="precio" value="15499">
				<div align="center">TV Sony LED 55'<br/><br/>
					15,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


		<span id = "elec1">
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
				<input type="hidden" name="producto" value="TV Samsung LED 55">
				<input type="hidden" name="precio" value="16499">
				<div align="center">TV Samsung LED 55'<br/><br/>
					16,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>

		<span id = "elec2">
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
				<input type="hidden" name="producto" value="TV Hisense LED 65">
				<input type="hidden" name="precio" value="18499">
				<div align="center">TV Hisense LED 65'<br/><br/>
					18,499.00 M.N<br/>
				</div>
				<input class= "carrito" type = "submit" name="agregarproducto" value = "Agrega al carrito"/>
			</form>
		</span>


	</main>

</body>
</html>