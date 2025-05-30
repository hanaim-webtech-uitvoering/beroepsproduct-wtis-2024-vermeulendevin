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
        <a href="winkelmand.php">Winkelmandje</a>
        <a href="login.html">Profiel</a>
    </div>
</header>
<main class="grid-2-col">
    <section class="login">
        <h2>Login</h2>
        <form action="#">
            <label for="login-username">Gebruikersnaam:</label>
            <input type="text" id="login-username" name="username">
            <label for="login-password">Wachtwoord:</label>
            <input type="password" id="login-password" name="password">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Onthoud mij</label>
            <button>Inloggen</button>
        </form>
    </section>
    <section class="register">
        <h2>Registreer</h2>
        <form action="#">
            <label for="firstname">Voornaam:</label>
            <input type="text" id="firstname" name="firstname">
            <label for="lastname">Achternaam:</label>
            <input type="text" id="lastname" name="lastname">
            <label for="adres">Straatnaam + Huisnummer</label>
            <input type="text" id="adres" name="adres">
            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" name="postcode">
            <label for="plaats">Plaats</label>
            <input type="text" id="plaats" name="plaats">
            <label for="reg-username">Gebruikersnaam:</label>
            <input type="text" id="reg-username" name="username">
            <label for="reg-password">Wachtwoord:</label>
            <input type="password" id="reg-password" name="password">
            <button>Registreer</button>
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