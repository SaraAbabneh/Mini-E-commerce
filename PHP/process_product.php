<?php
// Start the PHP session
// session_start();

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

    // Redirect to a different page after processing the form data
    header('Location: index.php');
    exit();
}

// Output the table only after processing the form data and adding products
echo "<table class=table table-striped>";
echo "<thead>";
        echo "<tr>";
        echo "<th>product_name</th>";
        echo "<th>product_description</th>";
        echo "<th>product_price</th>";
        echo "<th>product_image</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
        foreach ($_SESSION['products'] as $product) {
            echo '<tr>';
            echo '<td>'.$product['name'].'</td>'; // Fixed the variable name here
            echo '<td>'.$product['desc'].'</td>'; // Fixed the variable name here
            echo '<td>'.$product['price'].'</td>'; // Fixed the variable name here
            echo '<td><img class="product-image" src="../image/'.trim($product['img'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
            echo '</tr>';
        }
      echo "</tbody>";


echo "</table>";
?>
