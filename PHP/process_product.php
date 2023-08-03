<?php
// Start the PHP session
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
}

function addProduct($name, $img, $desc, $price) {
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

    // Handle the uploaded image
    $imagePath = ''; // Set a default image path
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'uploads/'; // Change this to the directory where you want to save the images
        $imageFileName = $_FILES['product_image']['name'];
        $imagePath = $targetDir . $imageFileName;
        move_uploaded_file($_FILES['product_image']['tmp_name'], $imagePath);
    }

   
    addProduct($productName, $imagePath, $productDescription, $productPrice);

    header('Location: product_card.php');
    exit();
}


?>
