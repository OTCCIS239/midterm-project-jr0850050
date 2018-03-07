<?php

// This file initializes some goodies that will make your
// development experience nicer! If your PHP throws an
// error, we will show you exactly what went wrong!
require_once('../includes/init.php');
require_once('../includes/db.php');

// Here you might connect to the database and show off some of your newest guitars.

$queryAllProducts = 'SELECT * FROM products
                           ORDER BY productID';
$statement2 = $db->prepare($queryAllProducts);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Joshua Ratliff">
        <link rel="stylesheet" href="/styles.css">
        <script type="text/javascript" src="/mysrc.js"></script>
        <title>Guitar Shop - All Products</title>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="/index.php" class="active">Home</a>
            <a href="all_orders.php">Orders</a>
            <a href="all_products.php">Products</a>
            <a href="unshipped_orders.php">Unshipped orders</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <h2>products</h2>
        <table>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th class="right">Price</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productID']; ?></td>
                <td><?php echo $product['productName']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
