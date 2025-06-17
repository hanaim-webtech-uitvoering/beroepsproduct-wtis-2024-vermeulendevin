<?php
session_start();

if (isset($_POST['index'])) {
    $index = $_POST['index'];
    
    // Remove item if it exists
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        // Reindex array
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Redirect back to cart
header('Location: winkelmand.php');
exit();
?> 