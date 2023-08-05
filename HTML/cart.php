<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <?php
    // Simulate the product data
    $products = array(
        array('id' => 1, 'name' => 'Product 1', 'price' => 10.99),
        array('id' => 2, 'name' => 'Product 2', 'price' => 19.99),
        array('id' => 3, 'name' => 'Product 3', 'price' => 7.50),
    );

    // Check if the cart session variable exists
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<h2>Cart Contents:</h2>';
        echo '<ul>';
        $totalPrice = 0;

        foreach ($_SESSION['cart'] as $productId => $quantity) {
            foreach ($products as $product) {
                if ($product['id'] == $productId) {
                    $subtotal = $quantity * $product['price'];
                    $totalPrice += $subtotal;
                    echo '<li>' . $product['name'] . ' x ' . $quantity . ' - $' . $subtotal . '</li>';
                    break;
                }
            }
        }

        echo '</ul>';
        echo '<p>Total Price: $' . $totalPrice . '</p>';
    } else {
        echo '<p>Your cart is empty.</p>';
    }
    ?>
</body>
</html>
