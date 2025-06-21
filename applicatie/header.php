<?php
session_start();
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzeria Sol Machina</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php">Pizzeria Sol Machina</a>
        <nav>
            <ul>
                <li><a href="index.php#pizza">Pizza's</a></li>
                <li><a href="index.php#dessert">Desserts</a></li>
                <li><a href="index.php#drinken">Drinken</a></li>
            </ul>
        </nav>
        <div>
            <a href="winkelmand.php">Winkelmandje</a>

            <?php
            if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
                echo '<a href="login.php">Login</a>';
            } else {
                if ($_SESSION['role'] === 'customer') {
                    echo '<a href="klantprofiel.php">Profiel</a>';
                } elseif ($_SESSION['role'] === 'employee') {
                    echo '<a href="personeelsprofiel.php">Profiel</a>';
                }
            }
            ?>
        </div>
    </header>
</body>
</html> 