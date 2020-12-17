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
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <script src='../../../JS/Reponsive.js'></script>
    <script src='../../../JS/Interface.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <?php
    include('../../ELEMENTS/topHeader.php');
    ?>
    <button class="openbtn" onclick="openMenuAdmin()">☰</button>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenuAdmin()">×</a>
        <a href="dashboard.php" class="link-dashboard">
            <li class="item-dashboard dashboard-active"><i
                    class="fas fa-palette icon-dashboard">&nbsp;&nbsp;Dashboard</i></li>
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
    </div>
</body>

</html>