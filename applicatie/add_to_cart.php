<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price'])) {
    $product = array(
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'type' => $_POST['product_type'],
        'quantity' => 1
    );
    
    $_SESSION['cart'][] = $product;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?> 