<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the product ID and quantity are provided
    if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        // Sanitize input if needed
        $productId = filter_var($productId, FILTER_SANITIZE_NUMBER_INT);
        $quantity = filter_var($quantity, FILTER_SANITIZE_NUMBER_INT);

        // Add the product to the cart
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }
}

// Redirect back to the cart page
// header('Location:..\HTML\cart.php');
// exit();
?>
