<?php
session_start();
require_once 'header.php';

$header = getHeader($_SESSION);
echo $header;
?>
<main class="grid-2-col">
    <section class="login">
        <h2>Login</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<div class="error-message" role="alert">' . htmlspecialchars($_SESSION['error']) . '</div>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="login_script.php" method="POST">
            <input type="hidden" name="login">
            <label for="login-username">Gebruikersnaam:</label>
            <input type="text" id="login-username" name="username" required>
            <label for="login-password">Wachtwoord:</label>
            <input type="password" id="login-password" name="password" required>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Onthoud mij</label>
            <button type="submit">Inloggen</button>
        </form>
    </section>

    <section class="register">
        <h2>Registreer</h2>
        <form action="login_script.php" method="POST">
            <input type="hidden" name="register">
            <label for="firstname">Voornaam:</label>
            <input type="text" id="firstname" name="first_name" required>
            <label for="lastname">Achternaam:</label>
            <input type="text" id="lastname" name="last_name" required>
            <label for="adres">Straatnaam + Huisnummer</label>
            <input type="text" id="adres" name="address" required>
            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" name="postcode" required>
            <label for="plaats">Plaats</label>
            <input type="text" id="plaats" name="plaats" required>
            <label for="reg-username">Gebruikersnaam:</label>
            <input type="text" id="reg-username" name="username" required>
            <label for="reg-password">Wachtwoord:</label>
            <input type="password" id="reg-password" name="password" required>
            <button type="submit">Registreer</button>
        </form>
    </section>
</main>
<?php
require_once 'footer.php';
?>