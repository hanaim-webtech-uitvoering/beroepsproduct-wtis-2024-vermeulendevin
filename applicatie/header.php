<?php
function getHeader($session) {
    $header = '<!doctype html>
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
                <li><a href="index.php#pizza">Pizza\'s</a></li>
                <li><a href="index.php#dessert">Desserts</a></li>
                <li><a href="index.php#drinken">Drinken</a></li>
            </ul>
        </nav>
        <div>
            <a href="winkelmand.php">Winkelmandje</a>';

    if (!isset($session['logged_in']) || $session['logged_in'] !== true) {
        $header .= '<a href="login.php">Login</a>';
    } else {
        if ($session['role'] === 'customer') {
            $header .= '<a href="klantprofiel.php">Profiel</a>';
        } elseif ($session['role'] === 'employee') {
            $header .= '<a href="personeelsprofiel.php">Profiel</a>';
        }
    }

    $header .= '
        </div>
    </header>
</body>
</html>';

    return $header;
}
?> 