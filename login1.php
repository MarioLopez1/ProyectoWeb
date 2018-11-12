<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
  session_start();
  if(!isset($_SESSION['error']) or (!isset($_SESSION['user'])) or (!isset($_SESSION['action']))) {
         $MsgError = '';   
  } else {
         $MsgError = $_SESSION['error'];
  }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" href="css/Shop.css" type="text/css"/>
    </head>
    <body>
        <h1>Iniciar Sesion</h1><br>
        <form method="post" action="controller/login.php" >
            <label>Username</label>
            <input type="text" name="username" autocomplete="off" /></br>
            <label>Password</label>
            <input type="password" name="password" autocomplete="off"/>
            <div class="errorMsg"><?php echo $MsgError; ?></div>
            <input type="submit" class="button" name="loginSubmit" value="Login"></br>
            <a class="reg" href="registro.html">Registrarse</a>
            <a class="reg" href="Home.php">Regresar</a>
        </form>
    </body>
</html>