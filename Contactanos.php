<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: Contactanos.html");
    }
    else {
        $user=$_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Shop - Contactanos 
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
					<a style="text-decoration:none;" class="back" href="Historia.php">Historia</a>  
				</li>
			</ul>
		</nav>

		<main id="maincontacto">
			<p>
				<span id = "contactanos">
				Contactanos<br/><br/>
				Jose Roberto Yee <br/>
				Mario Lopez
				</span>
			
			</p>
			<p> Nombre </p>
			<input id="nime" type="text"/>
			<p> Email </p>
			<input id="email" type="text"/>
			<p> Comentarios </p>
			<input id ="comm" type="text"/>
			<br/>
			<br/>
			<input class = "buttonc" id="button_env" type="button" value="Enviar Comentarios"/>
			<br/>
			<br/>
			<div id="mues" class="til"></div>
			<div id="mues1" class="til"></div>
			<div id="mues2" class="com"></div>
			<div id="cos">

			</div>

		</main>

		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/script_jqcom.js"></script>
		<script type="text/javascript" src="js/scriptajax.js"></script>

</body>
</html>