<!DOCTYPE html>
<?php include_once './Imports/Need/Session_Setup.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/common/logo.png">
    <title>Products</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    <?php 
    include_once './UxUi-Back/Common/Header.php'; 
    include_once './UxUi-Back/productViewPage/ProductMainShowcase.php';
    include_once './UxUi-Back/productViewPage/SpecificationTable.php'; 
    include_once './UxUi-Back/productViewPage/ProductReviews.php'; 
    include_once './UxUi-Back/productViewPage/ExploreRelatedProducts.php'; 
    include_once './UxUi-Back/Common/Footer.php'; 

    ?>

    </body>
</html>
