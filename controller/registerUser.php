<?php
include("../dataAccess/dbConnect.php");
include("../dataAccess/userDAO.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $telefono = $_POST['telefono'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $ciudad = $_POST['ciudad'];
    $cpostal = $_POST['cpostal'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    /* Regular expression check */
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $user);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
 //   $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if ($username_check && $email_check && strlen(trim($nombre)) > 0) {
        $db = getDB();
        $userDAO = new userDAO($db);
        $user1 = $userDAO->addUser($telefono, $nombre, $calle, $numero, $colonia, $ciudad, $cpostal, $email, $user, $pass);
        echo $user1;
        session_start();
        if ($user1) {
            $_SESSION['user']=array('nombre'=>$nombre);
            $url = BASE_URL . 'login1.php';//-------
            header("Location: $url"); // Page redirecting to home.php 
        } else {
          
            $_SESSION['error']= "Username already exists";
            $url = BASE_URL . 'registerUser.php';
        }
    }
    else {
        echo "Error en datos";
        $_SESSION['error']= "Error in data";
        $url = BASE_URL . 'registerUser.php';
    }
}
?>
