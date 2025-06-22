<?php
session_start();

if (isset($_POST['index']) && isset($_POST['quantity'])) {
    $index = $_POST['index'];
    $quantity = (int)$_POST['quantity'];
    
    if ($quantity > 0 && $quantity <= 10 && isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]['quantity'] = $quantity;
    }
}

header('Location: winkelmand.php');
exit();
?> 