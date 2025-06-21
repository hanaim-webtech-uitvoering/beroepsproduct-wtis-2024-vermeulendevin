<?php
session_start();
require_once 'db_connectie.php';

// 1. Ophalen van de data
// maak verbinding met de database (zie db_connection.php)
$db = maakVerbinding();

// haal alle producten uit de winkelmand op
$cart_items = [];
$total = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $index => $item) {
        $itemTotal = $item['price'] * $item['quantity'];
        $total += $itemTotal;
        
        $cart_items[] = [
            'index' => $index,
            'name' => $item['name'],
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'total' => $itemTotal
        ];
    }
}

// 2. Renderen van de data
if (empty($cart_items)) {
    $cart_table = '<p>Je winkelmandje is leeg.</p>';
} else {
    // Begin van de "table"
    $cart_table = '<table>';
    // De "table heads"
    $cart_table = $cart_table . '<thead><tr><th>Product</th><th>Prijs</th><th>Aantal</th><th>Totaal</th><th>Acties</th></tr></thead>';
    
    // Begin van de "table body"
    $cart_table = $cart_table . '<tbody>';
    
    // Elke rij als een "table row"
    foreach($cart_items as $item) {
        $index = $item['index'];
        $name = htmlspecialchars($item['name']);
        $price = number_format($item['price'], 2);
        $quantity = $item['quantity'];
        $itemTotal = number_format($item['total'], 2);
        
        $cart_table = $cart_table . "<tr>
            <td>$name</td>
            <td>€$price</td>
            <td>
                <form action='update_cart.php' method='POST' style='display: inline;'>
                    <input type='hidden' name='index' value='$index'>
                    <input type='number' name='quantity' value='$quantity' min='1' max='10'>
                    <button type='submit'>Update</button>
                </form>
            </td>
            <td>€$itemTotal</td>
            <td>
                <form action='remove_from_cart.php' method='POST' style='display: inline;'>
                    <input type='hidden' name='index' value='$index'>
                    <button type='submit'>Verwijder</button>
                </form>
            </td>
        </tr>";
    }
    
    // Eind van de "table body"
    $cart_table = $cart_table . '</tbody>';
    
    // Table footer met totaal
    $totalFormatted = number_format($total, 2);
    $cart_table = $cart_table . "<tfoot>
        <tr>
            <td colspan='3'><strong>Totaalbedrag:</strong></td>
            <td colspan='2'><strong>€$totalFormatted</strong></td>
        </tr>
    </tfoot>";
    
    // Eind van de "table"
    $cart_table = $cart_table . '</table>';
    
    // Cart actions
    $cart_table = $cart_table . '<div class="cart-actions">
        <a href="index.php" class="button">Verder winkelen</a>
        <a href="checkout.php" class="button">Afrekenen</a>
    </div>';
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winkelmandje - Pizzeria Sol Machina</title>
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
            <a href="login.php">Profiel</a>
        </div>
    </header>
    <main>
        <section class="cart">
            <h1>Winkelmandje</h1>
            <!-- 3. Weergeven van de data -->
            <?= $cart_table ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Pizzeria Sol Machina</p>
        <p>Adres:</p>
        <a href="privacy.php">Privacy</a>
    </footer>
</body>
</html>