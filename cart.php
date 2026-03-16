<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Cart</title>
    </head>
    <body>
        <h1>Cart</h1>
        <?php
        if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
            echo "Your cart is empty.";
        }
        else {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Item Name</th>";
            echo "<th>Price</th>";
            echo "</tr>";

            foreach ($_SESSION['cart'] as $item) {
                echo "<tr>"; 
                echo "<td>" . $item['name'] . "</td>"; 
                echo "<td>$" . $item['price'] . "</td>"; 
                echo "</tr>";
            }
            echo "</table>";     
        }
        ?>
        <br>
        <a href="products.php">Continue Shopping</a>
    </body>
</html>





        

    


