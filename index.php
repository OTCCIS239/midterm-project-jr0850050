<?php

// This file initializes some goodies that will make your
// development experience nicer! If your PHP throws an
// error, we will show you exactly what went wrong!
// This line should be on every page you create.
require_once('./includes/init.php');


//WARNING TO SELF: QUERIES ON PAGES ARE INCORRECT. REVIEW https://otc.instructure.com/courses/11520/assignments/348335?module_item_id=662878


?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Joshua Ratliff">
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="mysrc.js"></script>
        <title>Guitar Shop - Home Page</title>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="pages/all_orders.php">Orders</a>
            <a href="pages/all_products.php">Products</a>
            <a href="pages/unshipped_orders.php">Unshipped orders</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <div>
          <p>
            Please be warned: This is a administration environment for the store. Under no circumstances should a customer be accessing these databases.
          </p>
        </div>
    </body>
</html>
