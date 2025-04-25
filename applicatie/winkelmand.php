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
            <li><a href="/untitled/index.html#pizza">Pizza's</a></li>
            <li><a href="/untitled/index.html#dessert">Desserts</a></li>
            <li><a href="/untitled/index.html#drinken">Drinken</a></li>
        </ul>
    </nav>
    <div>
        <a href="winkelmand.html">Winkelmandje</a>
        <a href="login.php">Profiel</a>
    </div>
</header>
<main class="grid-2-col">
    <section class="current-order">
        <h2>Huidige bestelling</h2>
        <ul>
            <li>1x Pizza Margaritha</li>
            <li>1x Pizza Salami</li>
            <li>1x Pizza Pollo</li>
            <li>2x Lavacake</li>
            <li>1x Chocolate cookie</li>
            <li>1x Coca-Cola</li>
            <li>2x Fanta</li>
        </ul>
        <h3>Te betalen:</h3>
        <span>€43,99</span>
    </section>
    <section class="customer-info">
        <h2>Afleveradres</h2>
        <form action="#">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam">
            <label for="adres">Straatnaam + Huisnummer</label>
            <input type="text" id="adres" name="adres">
            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" name="postcode">
            <label for="plaats">Plaats</label>
            <input type="text" id="plaats" name="plaats">
            <button>Bestel</button>
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2025 Pizzeria Sol Machina</p>
    <p>Adres:</p>
    <a href="privacy.php">Privacy</a>
</footer>
</body>
</html>