<?php
session_start();
//display_products.php

include_once('../HTML/navbar.php');
include_once('..\HTML\form.php');

echo"<div style='margin-left: 50px; margin-right: 50px; margin-top:70px;'>";
echo "<table class='table table-striped' id='tabel'>";
echo "<thead>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Product Description</th>";
echo "<th>Product Price</th>";
echo "<th>Product Image</th>";
echo "<th></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if (isset($_SESSION['products']) && is_array($_SESSION['products'])) {
    foreach ($_SESSION['products'] as $product) {
        echo '<tr>';
        echo '<td>' . $product['name'] . '</td>';
        echo '<td>' . $product['desc'] . '</td>';
        echo '<td>' . $product['price'] . '</td>';
        echo '<td><img class="product-image" src="../image/' .trim($product['img'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
        echo '<td><span><i class="fa fa-plus" aria-hidden="true"></i> Add to cart </span></td>';
        echo '</tr>';
    }
}

echo "</tbody>";
echo "</table>";
echo "</div>";

echo "<a href='product_card.php' style='margin-left:25%;'><button style='width: 50%; padding: 10px;  background: #007BFF; padding: 10px; border:none ;border-radius: 4px; margin-top: 20px;color: #fff;'>View card project </button></a>";




require_once('../HTML/Footer.php');
?>
<script>
  let is_logged_in = <?php echo $_SESSION['is_logged_in'] ? 'true' : 'false'; ?>;

  if (is_logged_in) {
    let logout = document.getElementById('logout');
    let a_tage = document.getElementById('a_tage');
    logout.innerHTML = 'Logout';
    a_tage.href = "logout_process.php";
  }

  window.location.hash = '#tabel';
</script>

<!-- <script>
  // JavaScript to scroll to the #tabel anchor
//   window.location.hash = '#tabel';
</script> -->
