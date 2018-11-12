<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: ../login1.php");
    }
    else
    {
        header("Location: Home.php");
        echo "Session is set";
    }

    if(isset($_GET['logout']))
    {
        echo "Session will be destroyed";
        session_destroy();
        unset($_SESSION['user']);
        header("Location: ../Home.html");
    }
?>