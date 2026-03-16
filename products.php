<?php 
session_start();

$products = [
    "Apple" => 1,
    "Banana" => 2, 
    "Orange" => 3
]; 

if (isset($_GET['item'])) {
    $item = $_GET['item'];

    if (isset($products[$item])) {

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $product = [
            "name" => $item,
            "price" => $products[$item]
        ];
        $_SESSION['cart'][] = $product;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>

    <body>
        <h2>Products</h2>
        <table border="1">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($products as $name => $price) {
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>" . $price . "</td>";
                 echo "<td><a href='products.php?item=$name'>Add to Cart</a></td>";
                 echo "</tr>";
                 }
                 ?>
        </table>
        <br> 
        <a href="cart.php">View Cart</a>
    </body>
</html>
