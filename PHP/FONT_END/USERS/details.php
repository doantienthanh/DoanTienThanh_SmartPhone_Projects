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
                <?php
                if(isset($_GET['product'])){
                    $slug=$_GET['product'];
                    $products="SELECT * FROM products WHERE slug_products='$slug'";
                    $resultProducts=$connection->query($products);
                    while ($element = $resultProducts->fetch_assoc()) {
                    
                        $status="";
                        if($element['status']==0){
                            $status="Còn hàng ";
                        }else{
                            $status="Hết hàng ";
                        }
                        $id_brands=$element['id_brands'];
                        $brands="SELECT * FROM brands WHERE id=$id_brands";
                        $resultBrands=$connection->query($brands);
                        
                        while ($elemementbrand = $resultBrands->fetch_assoc()) {
                            $id_products=$element['id'];
                            $details="SELECT * FROM details WHERE id_products='$id_products'";
                            $resultDetails=$connection->query($products);
                    while ($elementDetails = $resultDetails->fetch_assoc()) {
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
                                        <p class="item-lefts-details"><b class="title-item-details">GIÁ:&nbsp;&nbsp;</b>'.number_format($element['price_products'],0,",",".").'<sup>đ</b></sup> <span><sub><strike>'.number_format($element['old_price_products'],0,",",".").'<sup>đ</sup></strike></sub></span>
                                        </p>
                                        <p class="item-lefts-details"><b class="title-item-details">NHÀ SẢN
                                                XUẤT:&nbsp;&nbsp;</b>'.$elemementbrand['name_brand'].'</p>
                                        <p class="item-lefts-details"><b class="title-item-details">NGÀY SẢN
                                                XUẤT:&nbsp;&nbsp;</b>'.$element['create_date'].'</p>
                                        <p class="item-lefts-details"><b class="title-item-details">MÔ TẢ:&nbsp;&nbsp;</b>'.$element['description'].'</p>
                                        <p class="item-lefts-details"><b class="title-item-details">TRẠNG
                                                THÁI:&nbsp;&nbsp;</b>'.$status.'</p>
                                        <p class="item-lefts-details"><b class="title-item-details">ƯU
                                                ĐÃI:&nbsp;&nbsp;</b>Miễn phí vận chuyển</p>
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
                                                <td class="items-title-table-products">'.$elementDetails['id_color'].'</td>
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
            }
                }else{
                    echo"Không có sản phẩm !";
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