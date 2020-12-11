<?php
require_once('../../DATA/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../../../CSS/Header.CSS">
    <link rel="stylesheet" href="../../../CSS/Element.CSS">
    <link rel="stylesheet" href="../../../CSS/Homepage.CSS">
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/ShowProducts.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
</head>
<body>
    <?php
    include('../../ELEMENTS/header.php');
    ?>
    <div class="main-body">
        <div class="col-2 category">
            <?php
            include('../../ELEMENTS/categories.php');
            ?>
        </div>
        <div class="col-10 slide-shop">
            <?php
            include('../../ELEMENTS/slide.php')
            ?>
        </div>
    </div>
    <?php
    include('../../ELEMENTS/showProducts.php');

    include('../../ELEMENTS/bottom.php');
    ?>
    <script src='../../../JS/Reponsive.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>