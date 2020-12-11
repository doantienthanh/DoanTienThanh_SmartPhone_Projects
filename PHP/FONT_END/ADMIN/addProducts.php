<?php
require_once('../../DATA/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../../../CSS/Header.CSS">
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/Dashboard.CSS">
    <link rel="stylesheet" href="../../../CSS/ListProducts.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
</head>

<body>
    <?php
    include('../../ELEMENTS/topHeader.php');
    ?>
    <button class="openbtn" onclick="openMenuAdmin()">☰</button>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenuAdmin()">×</a>
        <a href="dashboard.php" class="link-dashboard">
            <li class="item-dashboard dashboard-active"><i class="fas fa-palette icon-dashboard">&nbsp;&nbsp;Dashboard</i></li>
        </a>
        <a href="products.php" class="link-dashboard">
            <li class="item-dashboard"><i class="fa fa-database icon-dashboard">&nbsp;&nbsp;Products</i></li>
        </a>
        <a href="#" class="link-dashboard">
            <li class="item-dashboard"><i class="fas fa-palette icon-dashboard">&nbsp;&nbsp;Orders</i></li>
        </a>
    </div>
    <div class="body-admin-page">
        <?php
        include('../../ELEMENTS/listMenuAdmin.php');
        ?>
        <div class="list-tableProducts">
            <?php
            include('../../ELEMENTS/listProducts.php');
            ?>
            <div class="add-products-page">
                <form action="../../BACK_END/PRODUCTS/managerProducts.php" method="post" onsubmit="checkAddProducts()">
                    <div class="form-add-products">
                        <div class="left-add-products-page">
                            <h2 class="title-add-products">Products</h2>
                            <div class="item-add">
                                <input type="text" required id="nameProducts" name="nameProducts" onkeyup="getSlug()" class="item-input-add" placeholder="&nbsp;&nbsp;Name products (*)">
                                <input type="text" id="slugProducts" name="slugProducts" class="item-input-add" placeholder="&nbsp;&nbsp;Slug products (*)">
                            </div>
                            <div class="item-add">
                                <select name="categories" id="categories" class="item-input-add">
                                    <?php
                                    $categories = 'SELECT * FROM categories';
                                    $resultCategories = $connection->query($categories);
                                    foreach ($resultCategories as $element) {
                                        echo '<option value="' . $element['id'] . '" class="item-selection">' . $element['name_categories'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <select name="brands" id="brands" class="item-input-add">
                                    <?php
                                    $brands = 'SELECT * FROM brands';
                                    $resultBrands = $connection->query($brands);
                                    foreach ($resultBrands as $element) {
                                        echo '<option value="' . $element['id'] . '" class="item-selection">' . $element['name_brand'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="item-add">
                                <input type="number" required id="priceProducts" name="priceProducts" class="item-input-add" placeholder="&nbsp;&nbsp;Price (*)">
                                <input type="number" id="priceSales" name="priceSales" class="item-input-add" placeholder="&nbsp;&nbsp;Price sales">
                            </div>
                            <textarea type="text" id="description" name="description" class="item-input-add-products desction-add"></textarea>
                            <input type="file" required id="image" name="image" class="item-input-add-products image-add-products" placeholder="&nbsp;&nbsp;Image products">
                            <input type="file" id="listImage" name="listImage" class="item-input-add-products image-add-products" placeholder="&nbsp;&nbsp;List image products">
                        </div>



                        <div class="right-add-products-page">
                            <h2 class="title-add-products">Details</h2>
                            <div class="item-add item-right">
                                <input type="text" id="sizeScreen" name="sizeScreen" class="item-input-add" placeholder="&nbsp;&nbsp;Size of screen">
                                <input type="text" id="resolutionPhone" name="resolutionPhone" class="item-input-add" placeholder="&nbsp;&nbsp;Resolution of phone">
                            </div>
                            <div class="item-add">
                                <select name="colors" id="colors" class="item-input-add">
                                    <?php
                                    $color = 'SELECT * FROM colors';
                                    $resultColor = $connection->query($color);
                                    foreach ($resultColor as $element) {
                                        echo '<option value="' . $element['id'] . '" class="item-selection">' . $element['name_color'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <select name="systems" id="systems" class="item-input-add">
                                    <?php
                                    $system = 'SELECT * FROM systems';
                                    $resultSystem = $connection->query($system);
                                    foreach ($resultSystem as $element) {
                                        echo '<option value="' . $element['id'] . '" class="item-selection">' . $element['name_system'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="item-add">
                                <input type="text" id="weightPhone" name="weightPhone" class="item-input-add" placeholder="&nbsp;&nbsp; Weight of phone">
                                <input type="text" id="memoryPhone" name="memoryPhone" class="item-input-add" placeholder="&nbsp;&nbsp;Memory of phone">

                            </div>
                            <div class="item-add">
                                <input type="text" id="cameraPhone" name="cameraPhone" class="item-input-add" placeholder="&nbsp;&nbsp; Camera of phone">
                                <input type="text" id="pinPhone" name="pinPhone" class="item-input-add" placeholder="&nbsp;&nbsp;Pin of phone">

                            </div>
                        </div>
                    </div>
                  <?php
                    if(isset($_GET['errorAdd'])){
                        echo"<span class='showError' style='color:red; color: red;
                        font-size: 16px;
                        text-align: center;
                        padding:20px;
                        margin-left:40%;
                        '><b>".$_GET['errorAdd']."</b></span>";
                    }
                    ?>
                  
                    <button class="btn-add-products" type="submit" name="btnAddProducts" id="btnAddProducts">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src='../../../JS/Reponsive.js'></script>
    <script src='../../../JS/Admin.js'></script>
    <script src='../../../JS/Products.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>