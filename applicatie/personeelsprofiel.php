<?php
require_once 'header.php';
?>
<main class="grid-2-col">
    <section class="order-list">
        <h2>Geplaatste bestellingen:</h2>
        <article class="order">
            <h3>Ordernummer: <span>432671</span></h3>
            <p>Datum: <span>01-01-2025, 17:30</span></p>
            <p>Adres: <span>Kerkstraat 1, 1234AB, Stad</span></p>
            <p>Status: <span>Onderweg</span></p>

            <button>Bekijk details</button>
        </article>
        <article class="order">
            <h3>Ordernummer: <span>129978</span></h3>
            <p>Datum: <span>01-01-2025, 17:15</span></p>
            <p>Adres: <span>Kerkstraat 4, 1234AB, Stad</span></p>
            <p>Status: <span>Bezorgd</span></p>

            <button>Bekijk details</button>
        </article>
        <article class="order">
            <h3>Ordernummer: <span>168345</span></h3>
            <p>Datum: <span>01-01-2025, 17:00</span></p>
            <p>Adres: <span>Kerkstraat 12, 1234AB, Stad</span></p>
            <p>Status: <span>Bezorgd</span></p>

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
            <button>Verander status</button>
        </article>
    </section>
</main>
<?php
require_once 'footer.php';
?>