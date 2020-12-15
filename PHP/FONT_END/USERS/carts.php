<?php
require_once('../../DATA/connection.php');
if(!isset($_COOKIE['id_user'])){
    header('location:homepage.php');
}
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
    <link rel="stylesheet" href="../../../CSS/Carts.CSS">
</head>

<body>
    <?php
    include('../../ELEMENTS/header.php');
    if(isset($_GET['massageAddCart'])){
        echo '<script language="javascript">';
        echo 'alert("'.$_GET['massageAddCart'].'")';
        echo '</script>';
    }
    ?>
    <div class="main-body">
        <div class="col-2 category">
            <?php
            include('../../ELEMENTS/categories.php');
            ?>
        </div>
        <div class="col-10 body-carts">
            <table class="table-list-carts">
                <tr class="item-list-carts">
                    <th class="item-title-table-list-carts">STT</th>
                    <th class="item-title-table-list-carts">Tên Sản Phẩm</th>
                    <th class="item-title-table-list-carts">Ảnh sản phẩm</th>
                    <th class="item-title-table-list-carts">Số lượng</th>
                    <th class="item-title-table-list-carts">Giá sản phẩm</th>
                    <th class="item-title-table-list-carts"></th>
                </tr>
                <?php
                $id_user=json_decode(base64_decode($_COOKIE['id_user']));
                $carts="SELECT * FROM carts WHERE id_user='$id_user'";
                $resultCarts=$connection->query($carts);
                $totalAllPrice=0;
                $index=0;
                while ($element = $resultCarts->fetch_assoc()) {
                   $id_products=$element['id_product'];
                   $products="SELECT * FROM products WHERE id='$id_products'";
                   $resultProducts=$connection->query($products);
                   while ($elementProducts = $resultProducts->fetch_assoc()) {
                    $index+=1;
                    $totalPrice=$element['quantity'] * $elementProducts['price_products']; 
                    $totalAllPrice+=$totalPrice;
                    echo '
                <tr class="item-list-table-carts">
                    <td class="item-products-table-list-carts">'.$index.'</td>
                    <td class="item-products-table-list-carts">'.$elementProducts['name_products'].'</td>
                    <td class="item-products-table-list-carts"><img src="../../../IMAGE/'.$elementProducts['image_products'].'" class="image-in-cart"></td>
                    <td class="item-products-table-list-carts quantity-carts">
                        <form action="../../BACK_END/PRODUCTS/orders.php?slug_products_plus='.$elementProducts['id'].'" method="post" class="form-carts">
                            <button class="btn-carts" name="btn_minus">-</button>
                        </form>
                        <button class="btn-show-quantity-carts">'.$element['quantity'].'</button>
                        <form action="../../BACK_END/PRODUCTS/orders.php?slug_products_plus='.$elementProducts['id'].'" method="post" class="form-carts">
                            <button class="btn-carts" name="btn_plus">+</button>
                        </form>
                    </td>
                    <td class="item-products-table-list-carts">'.number_format($totalPrice,0,",",".").'<sup>đ</sup></td>
                    <td class="item-products-table-list-carts">
                    <form action="../../BACK_END/PRODUCTS/orders.php?slug_products_plus='.$elementProducts['id'].'" method="post">
                    <button class="btn-delete-products-in-carts" name="btn_delete_products_carts"><i class="far fa-trash-alt icon-delete-products-in-carts"></i></button>
                    </form>
                    </td>
                </tr>
                    ';
                   }
               }
               ?>
            </table>
            <div class="payment-component">
            <form action="../../BACK_END/PRODUCTS/orders.php" method="post" style="width:50%; height:100%;">
            <button class="btn-cartses btn-payment" name="btn_carts_payments"><b>THANH TOÁN</b></button>
            </form>
             <button class="btn-cartses btn-total-price"><?php echo number_format($totalAllPrice,0,",",".") ?><span><sup>đ</sup></span></button>
            </div>
        </div>
    </div>
    <script src='../../../JS/Reponsive.js'></script>
    <script src='../../../JS/Products.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>