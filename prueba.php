<?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header("Location: login1.php");
    }
    else {
        $user=$_SESSION['user'];
    }
?>
<!DOCTYPE html">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome <?php echo $user['nombre']; ?></title>
    </head>
    <body>
        <div id="header">
            <div id="right">
                <div id="content">
                    <h2>hi' <?php echo $user['nombre']; ?>&nbsp;
                    <a href="controller/logout.php?logout">Logout</a></h2>
                </div>
            </div>
        </div>
    </body>
</html>