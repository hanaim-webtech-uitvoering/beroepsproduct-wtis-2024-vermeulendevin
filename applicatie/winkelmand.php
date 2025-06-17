<?php
session_start();
?>

<!doctype html>
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
    </header>
    <main>
        <section class="cart">
            <h1>Winkelmandje</h1>
            <?php if (empty($_SESSION['cart'])): ?>
                <p>Je winkelmandje is leeg.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Prijs</th>
                            <th>Aantal</th>
                            <th>Totaal</th>
                            <th>Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total = 0;
                        foreach ($_SESSION['cart'] as $index => $item): 
                            $itemTotal = $item['price'] * $item['quantity'];
                            $total += $itemTotal;
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td>€<?php echo number_format($item['price'], 2); ?></td>
                            <td>
                                <form action="update_cart.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" max="10">
                                    <button type="submit">Update</button>
                                </form>
                            </td>
                            <td>€<?php echo number_format($itemTotal, 2); ?></td>
                            <td>
                                <form action="remove_from_cart.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <button type="submit">Verwijder</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"><strong>Totaalbedrag:</strong></td>
                            <td colspan="2"><strong>€<?php echo number_format($total, 2); ?></strong></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="cart-actions">
                    <a href="index.php" class="button">Verder winkelen</a>
                    <a href="checkout.php" class="button">Afrekenen</a>
                </div>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Pizzeria Sol Machina</p>
        <p>Adres:</p>
        <a href="privacy.php">Privacy</a>
    </footer>
</body>
</html>