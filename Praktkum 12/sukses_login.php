<?php
session_start();

if (!isset($_SESSION ['username'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container.logout">
            <from action="logout.php" method="POST" class="login-email">
                <h1> selamat Datang, <?php $_SESSION['username'];?>!</h1>
                <div class="input-group">
                    <button type="submit" class="btn">Logout</button>
                </div>
            </from>
        </div>
    </body>
</html>