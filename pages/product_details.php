<?php

// This file initializes some goodies that will make your
// development experience nicer! If your PHP throws an
// error, we will show you exactly what went wrong!
require_once('../includes/init.php');

// Here you might connect to the database and show off some of your newest guitars.

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Joshua Ratliff">
        <link rel="stylesheet" href="/styles.css">
        <script type="text/javascript" src="/mysrc.js"></script>
        <title>Guitar Shop - Product Details</title>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="/index.php" class="active">Home</a>
            <a href="all_orders.php">Orders</a>
            <a href="all_products.php">Products</a>
            <a href="unshipped_orders.php">Unshipped orders</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </body>
</html>
