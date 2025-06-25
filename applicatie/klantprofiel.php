<?php
session_start();
require_once 'header.php';

$header = getHeader($_SESSION);
echo $header;
?>
<main class="grid-2-col">
    <section class="order-list">
        <h2>Geplaatste bestellingen:</h2>
        <article class="order">
            <h3>Ordernummer: <span>123456</span></h3>
            <p>Datum: <span>01-01-2025, 17:30</span></p>
            <p>Adres: <span>Kerkstraat 1, 1234AB, Stad</span></p>
            <p>Status: <span>Onderweg</span></p>

            <button>Bekijk details</button>
        </article>
        <article class="order">
            <h3>Ordernummer: <span>123456</span></h3>
            <p>Datum: <span>01-01-2025, 17:30</span></p>
            <p>Adres: <span>Kerkstraat 1, 1234AB, Stad</span></p>
            <p>Status: <span>Onderweg</span></p>

            <button>Bekijk details</button>
        </article>
        <article class="order">
            <h3>Ordernummer: <span>123456</span></h3>
            <p>Datum: <span>01-01-2025, 17:30</span></p>
            <p>Adres: <span>Kerkstraat 1, 1234AB, Stad</span></p>
            <p>Status: <span>Onderweg</span></p>

            <button>Bekijk details</button>
        </article>
    </section>
    <section class="selected-order">
        <h2>Geselecteerde bestelling:</h2>
        <article class="order-detail">
            <h3>Ordernummer: <span>432671</span></h3>
            <p>Datum: <span>01-01-2025, 17:30</span></p>
            <p>Adres: <span>Kerkstraat 1, 1234AB, Stad</span></p>
            <p>Status: <span>Onderweg</span></p>
            <h4>Bestelling:</h4>
            <ul>
                <li>3x Pizza Margaritha</li>
                <li>2x Lavacake</li>
                <li>3x Cola</li>
            </ul>
        </article>
    </section>
</main>
<?php
require_once 'footer.php';
?>