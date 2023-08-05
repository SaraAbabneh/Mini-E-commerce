<?php
// Start the PHP session
//process_product.php
session_start();

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    $username = $_SESSION['Username'];

    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
    }

    function addProduct($name, $img, $desc, $price)
    {
        $product = array(
            'name' => $name,
            'img' => $img,
            'desc' => $desc,
            'price' => $price
        );
        $_SESSION['products'][] = $product;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $productName = $_POST['product_name'];
        $productDescription = $_POST['product_description'];
        $productPrice = $_POST['product_price'];
        $productImageName = $_FILES['product_image']['name']; // Corrected the field name here

        // Handle the uploaded image
        $imagePath = ''; // Set a default image path
        if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
            $targetDir = 'uploads/';
            $imagePath = $targetDir . $productImageName;
            move_uploaded_file($_FILES['product_image']['tmp_name'], $imagePath);
        }

        addProduct($productName, $productImageName, $productDescription, $productPrice);

        // After processing the form data, redirect to a different page
        header('Location: display_products.php');
        exit();
    }
} else {
    // Invalid credentials, show an error message
  
    header('location:..\HTML\login.php');
    exit();
};

?>
 <script>alert("Invalid Username")</script>;

