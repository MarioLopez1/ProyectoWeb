<?php
include("../dataAccess/dbConnect.php");
include("../dataAccess/userDAO.php");

ini_set('display_errors','0');
session_start();
    
/* Login Form */
 //   $username = $_POST['username'];
$username = filter_input(INPUT_POST,'username');
 //   $password = $_POST['password'];
$password = filter_input(INPUT_POST, 'password');
if (strlen(trim($username)) > 1 && strlen(trim($password)) > 1) {
        $db = getDB();
        $userDAO = new userDAO($db);
        $user = $userDAO->getUser($username, $password);
        
        if ($user) {
            $_SESSION['user']=$user;
            //echo $_SESSION['user'];
            $url = BASE_URL . 'Home.php'; //---------------------
            header("Location: $url"); // Page redirecting to home.php 
        } else {
            $_SESSION['error']= "Please check login details.";
            $url = BASE_URL . 'login1.php';
            header("Location: $url"); 
        }
}
else {
    $errorMsgLogin = "Please check login details.";
    $url = BASE_URL . 'login1.php';
    header("Location: $url"); 
}
?>