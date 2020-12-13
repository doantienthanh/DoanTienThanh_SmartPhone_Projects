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
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <link rel="stylesheet" href="../../../CSS/ShowProducts.CSS">
    <link rel="stylesheet" href="../../../CSS/details.CSS">
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
        <div class="col-10 body-details">
            <form action="" method="post">
                <!-- <?php
                if(isset($_GET['product'])){
                    $slug=$_GET['product'];
                    $products="SELECT * FROM products WHERE slug_products='$slug'";
                    $resultProducts=$connection->query($products);
                    while ($element = $resultProducts->fetch_assoc()) {
                        echo'
                        <div class="conten-details">
                            <div class="image-content-details">
                                <div class="main-image-details">
                                    <img src="../../../IMAGE/'.$element['image_products'].'" class="image-main">
                                </div>
                                <div class="list-image-details">
                                    <img src="../../../IMAGE/iphone12Promax.png" class="item-list-image">
                                    <img src="../../../IMAGE/iphone12Promax.png" class="item-list-image">
                                    <img src="../../../IMAGE/iphone12Promax.png" class="item-list-image">
                                    <img src="../../../IMAGE/iphone12Promax.png" class="item-list-image">
                                </div>
                            </div>
                            <div class="information-detail-products">
                                <h1 class="name-products-detials">'.strtoupper($element['name_products']).'</h1>
                                <div class="info-details">
                                    <div class="left-info-details">
                                        <p class="item-lefts-details"><b class="title-item-details">GIÁ:&nbsp;&nbsp;</b><sup>'.number_format($element['price_products'],0,",",".").'<sup>đ</sup></b></sup> <span><sub><strike>'.number_format($element['old_price_products'],0,",",".").'<sup>đ</sup></strike></sub></span>
                                        </p>
                                        <p class="item-lefts-details"><b class="title-item-details">NHÀ SẢN
                                                XUẤT:&nbsp;&nbsp;</b>sds</p>
                                        <p class="item-lefts-details"><b class="title-item-details">NGÀY SẢN
                                                XUẤT:&nbsp;&nbsp;</b>saddas</p>
                                        <p class="item-lefts-details"><b class="title-item-details">MÔ TẢ:&nbsp;&nbsp;</b>sản
                                            phẩm được sản xuất trên nhiều dây chuyền hiệu quả cáo với nhiều chất lượng hànd sản
                                            phẩm được sản xuất trên nhiều dây chuyền hiệu quả cáo với nhiều chất lượng hànd</p>
                                        <p class="item-lefts-details"><b class="title-item-details">TRẠNG
                                                THÁI:&nbsp;&nbsp;</b>sadass</p>
                                        <p class="item-lefts-details"><b class="title-item-details">ƯU
                                                ĐÃI:&nbsp;&nbsp;</b>sadass</p>
                                    </div>
                                    <div class="right-info-details">
                                        <table class="table-details-products">
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">HỆ ĐIỀU HÀNH</th>
                                                <td class="items-title-table-products">Bill Gates</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">MÀU</th>
                                                <td class="items-title-table-products">55577854</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">MÀN HÌNH</th>
                                                <td class="items-title-table-products">55577855</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">BỘ NHỚ</th>
                                                <td class="items-title-table-products">Bill Gates</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">ĐỘ PHÂN GIẢI</th>
                                                <td class="items-title-table-products">55577854</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">MÁY ẢNH</th>
                                                <td class="items-title-table-products">55577855</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">PIN</th>
                                                <td class="items-title-table-products">Bill Gates</td>
                                            </tr>
                                            <tr class="item-tables">
                                                <th class="item-title-table-products">BỘ NHỚ</th>
                                                <td class="items-title-table-products">55577854</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="bottom-details-products">
                                    <input type="number" class="input-quantity" placeholder="Số lượng" min="1" value="1">
                                    <button class="btn-add-to-cart-details">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                        ';

                    }
                }
             
                ?>
            </form>
        </div>
    </div>
    <?php
    include('../../ELEMENTS/bottom.php');
    ?>
    <script src='../../../JS/Reponsive.js'></script>
    <script src='../../../JS/Products.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>