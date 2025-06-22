<?php
session_start();
require_once 'db_connectie.php';
require_once 'header.php';

$header = getHeader($_SESSION);
echo $header;

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
    </div>';
}

// Klantgegevens formulier
$customer_form = '';
if (!empty($cart_items)) {
    $customer_form = '
    <section class="customer-info">
        <h2>Klantgegevens</h2>
        <form action="process_order.php" method="POST" class="customer-form">
            <div class="form-group">
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Telefoonnummer:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="address">Adres:</label>
                <input type="text" id="address" name="address" required>
            </div>
            
            <div class="form-group">
                <label for="postal_code">Postcode:</label>
                <input type="text" id="postal_code" name="postal_code" required>
            </div>
            
            <div class="form-group">
                <label for="city">Plaats:</label>
                <input type="text" id="city" name="city" required>
            </div>
            
            <div class="form-group">
                <label for="payment_method">Betaalmethode:</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="">Kies een betaalmethode</option>
                    <option value="ideal">iDEAL</option>
                    <option value="creditcard">Creditcard</option>
                    <option value="paypal">PayPal</option>
                    <option value="banktransfer">Bankoverschrijving</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="notes">Opmerkingen (optioneel):</label>
                <textarea id="notes" name="notes" rows="3"></textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="button checkout-button">Bestelling plaatsen</button>
            </div>
        </form>
    </section>';
}
?>

<?php
require_once 'header.php';
?>
    <main>
        <section class="cart">
            <h1>Winkelmandje</h1>
            <!-- 3. Weergeven van de data -->
            <?= $cart_table ?>
        </section>
        
        <!-- Klantgegevens formulier -->
        <?= $customer_form ?>
    </main>
<?php
require_once 'footer.php';
?>