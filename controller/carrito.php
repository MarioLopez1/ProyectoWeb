<?php
include("../dataAccess/dbConnect.php");
include("../dataAccess/carritoDAO.php");

ini_set('display_errors','0');
session_start();
    
/* Login Form */
 //   $username = $_POST['username'];
//$username = filter_input(INPUT_POST,'user');
 //   $password = $_POST['password'];
//$password = filter_input(INPUT_POST, 'password');
//if (strlen(trim($username)) > 1 && strlen(trim($password)) > 1) {
$user = $_SESSION['user'];
$username = $user['user'];
$db = getDB();
$carritoDAO = new carritoDAO($db);
$carrito = $carritoDAO->getPedido($username);
        
if ($carrito) {
    $_SESSION['carrito']=$carrito;
    //echo $_SESSION['user'];
    $url = BASE_URL . 'car.php'; //---------------------
    header("Location: $url"); // Page redirecting to home.php 
} //else {
    //$_SESSION['error']= "Please check login details.";
    //$url = BASE_URL . 'login1.php';
    //header("Location: $url"); 
//}
//}
//else {
    //$errorMsgLogin = "Please check login details.";
    //$url = BASE_URL . 'login1.php';
    //header("Location: $url"); 
//}
?>