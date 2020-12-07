<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../CSS/Header.CSS">
    <link rel="stylesheet" href="../CSS/Element.CSS">
    <link rel="stylesheet" href="../CSS/Homepage.CSS">
    <link rel="stylesheet" href="../CSS/Reponsive.CSS">
    <script src='../JS/Reponsive.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <?php
    include('../ELEMENTS/header.php');
    ?>
    <a href="javascript:void(0);" class="link-reponsive-categories" onclick="reponsiveCategory()">
        <i class="fa fa-globe icon-categories"></i> <span><sup>CATEGORY</sup></span>
    </a>
    <div class="main-body">
        <div class="col-2 category">
            <?php
    include('../ELEMENTS/categories.php');
    ?>
        </div>
        <div class="col-s-10">
            thanh
        </div>
    </div>
</body>

</html>