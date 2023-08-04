<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get" action="">
        <label for="">product name</label>
        <input type="text" name="product-name" require>
        <label for="">product description</label>
        <input type="text" name="product-desc" require>
        <label for="">product image url</label>
        <input type="text" name="product-image" require>
        <label for="">product price</label>
        <input type="product price" name="product-price" require>
        <input type="submit" value="add">
    </form>
</body>
</html>
<?php
if (isset($_SESSION["cards"])) {
    array_push($_SESSION["cards"],array(
        $_GET['product-name'],//0
        $_GET['product-desc'],//1
        $_GET['product-image'],//2
        $_GET['product-price'],//3
    ));
}else{
    $_SESSION["cards"]=array();
    array_push($_SESSION["cards"],array(
        $_GET['product-name'],
        $_GET['product-desc'],
        $_GET['product-image'],
        $_GET['product-price'],
    ));
}

$uniqueArray = array_unique($_SESSION["cards"]);
print_r($uniqueArray);










echo "<table>";
foreach ($_SESSION["cards"] as $value) {
    echo "<tr>";
    echo "<td>$value[0]</td>"; 
    echo "<td>$value[1]</td>"; 
    echo "<td>";
    echo"$value[2]";
    echo "</td>"; 
    echo "<td>$value[3]</td>"; 
    echo "</tr>";
}
echo "</table>";