<?php
session_start();
//display_products.php

include_once('../HTML/navbar.php');
include_once('..\HTML\form.php');

echo "<div id='tabel-div'>";
echo "<table class='table table-striped' id='tabel' style= 'margin-right: 12px;'>";
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
    echo '<td><img class="product-image" src="../image/' . trim($product['img'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
    echo '<td><button><span><i class="add_cart fa fa-plus" aria-hidden="true"></i> Add to cart </span></button></td>';
    echo '</tr>';
  }
}

echo "</tbody>";
echo "</table>";
echo "</div>";

echo "<a href='product_card.php' style='margin-left:25%;'><button style='width: 50%; padding: 10px;  background: #007BFF; padding: 10px; border:none ;border-radius: 20px; margin-top: 20px;color: #fff; font-size: 1.4em;'>View card project </button></a>";




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

<style>
  #tabel-div {
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 70px;
  }

  @media screen and (max-width: 481px) {

    #tabel-div {
      margin-left: 2px;
      margin-right: 9px;
      margin-top: 0px;
      padding: 21px;
    }

    .table td {
      padding: 0rem;
      vertical-align: middle;
    }

    img {
      width: 50px;
      height: 50px;
    }

    .table th {
      padding: 0rem;
    }

  }
</style>