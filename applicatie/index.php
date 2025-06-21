<?php
session_start();
require_once 'header.php';

$header = getHeader($_SESSION);
echo $header;
?>
    <main>
        <section class="hero">
            <h1>Welkom bij Pizzeria Sol Machina</h1>
        </section>
        <section id="pizza" class="menu">
            <h2>Pizza's</h2>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza Margaritha</h3>
                <span>€9,99</span>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Pizza Margaritha">
                    <input type="hidden" name="product_price" value="9.99">
                    <input type="hidden" name="product_type" value="pizza">
                    <button type="submit">Voeg toe</button>
                </form>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza Salami</h3>
                <span>€9,99</span>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Pizza Salami">
                    <input type="hidden" name="product_price" value="9.99">
                    <input type="hidden" name="product_type" value="pizza">
                    <button type="submit">Voeg toe</button>
                </form>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza Pollo</h3>
                <span>€9,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza Quattro Formaggi</h3>
                <span>€9,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza BBQ & Chicken</h3>
                <span>€9,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Pizza Shoarma</h3>
                <span>€9,99</span>
                <button>Voeg toe</button>
            </article>
        </section>
        <section id="dessert" class="menu">
            <h2>Desserts</h2>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Lavacake</h3>
                <span>€5,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Cannoli</h3>
                <span>€5,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Chocolate cookie</h3>
                <span>€3,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Cinnasticks</h3>
                <span>€5,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Chocolademousse</h3>
                <span>€5,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Choco pizza</h3>
                <span>€5,99</span>
                <button>Voeg toe</button>
            </article>
        </section>
        <section id="drinken" class="menu">
            <h2>Drinken</h2>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Coca-Cola</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Coca-Cola Zero</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Fanta</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Sprite</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Redbull</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
            <article class="menu-item">
                <img src="img/pizza.png" alt="Pizza">
                <h3>Ice Tea Green</h3>
                <span>€2,99</span>
                <button>Voeg toe</button>
            </article>
        </section>
    </main>
<?php
require_once 'footer.php';
?>