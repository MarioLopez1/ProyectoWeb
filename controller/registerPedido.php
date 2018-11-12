<?php
include("../dataAccess/dbConnect.php");
include("../dataAccess/carritoDAO.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* Signup Form */
if (!empty($_POST['agregarproducto'])) {
    $user = $_POST['user'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    /* Regular expression check */
    //$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $user);
    //$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
 //   $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    //if ($username_check && $email_check && strlen(trim($nombre)) > 0) {
    $db = getDB();
    $carritoDAO = new carritoDAO($db);
    $carrito1 = $carritoDAO->addPedido($user, $producto, $cantidad, $precio);
    //echo $carrito1;
    session_start();////////////////////////
    //if ($carrito1) {
    $_SESSION['carrito']=array('producto'=>$producto, 'cantidad'=>$cantidad, 'precio'=>$precio);
    ////////////////////////
    $url = BASE_URL . 'car.php';//-------
    header("Location: $url"); // Page redirecting to home.php
    //} else {
          
        //$_SESSION['error']= "Username already exists";
        //$url = BASE_URL . 'registerUser.php';
    //}
    //}
}
?>