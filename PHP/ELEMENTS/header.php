<div class="header">
    <?php
    include('topHeader.php');
    ?>
    <div class="main-header">
        <div class="col-3 col-s-3 left-main-header">
           <a href="homepage.php"><img src="../../../IMAGE/logo.png" class="image-logo" alt="tienthanhshop"></a>
        </div>
        <div class="col-8  center-main-header">
            <b class="name-shops"></b>
        </div>
        <?php
        if(isset($_COOKIE['id_user'])){
           $id_user=json_decode(base64_decode($_COOKIE['id_user']));
           $carts="SELECT * FROM carts WHERE id_user='$id_user'";
           $queryCarts=$connection->query($carts);
           $price=0;
           $quantity=0;
           foreach($queryCarts as $element){
               $quantity=$quantity+$element['quantity'];
               $idProducts=$element['id_product'];
               $products="SELECT * FROM products WHERE id='$idProducts'";
               $queryProduct=$connection->query($products);
               foreach($queryProduct as $elementPro){
                $totalPrice=$element['quantity'] * $elementPro['price_products']; 
                $price+=$totalPrice;
               }
           }
            echo '
            <div class="col-2  right-main-header">
            <div class="quantity-customer-cart">'.$quantity.'</div>
            <span><a href="carts.php" class="link-to-cart"><i class="fas fa-shopping-basket customer-cart"></a></i></span>
            <span class="price-customer-carts">'.number_format($price,0,",",".").'<sup>đ</sup></span>
            </div>
            ';
        }else{
            echo'
            <div class="col-2  right-main-header">
            <div class="quantity-customer-cart">0</div>
            <span><a href="homepage.php" class="link-to-cart"><i class="fas fa-shopping-basket customer-cart"></a></i></span>
            </div>
            '; 
        }
        ?>
         
    </div>
    <div class="menu-header">
        <ul class="item-menu-header" id="listMenu">
            <a href="homepage.php" class="link-menu"> <li class="item-menu active"><i class='fas fa-home icon-homepage'></i>&nbsp;HOME</li></a>
            <a href="products.php" class="link-menu"><li class="item-menu"><span>PRODUCTS</span></li></a>
            <a href="#" class="link-menu"><li class="item-menu"><span>ACCESSORIES</span></li></a>
            <a href="#" class="link-menu"><li class="item-menu"><span>ABOUT US</span></li></a>
            <a href="#" class="link-menu"><li class="item-menu"><span>HELPS</span></li></a>
            <a href="javascript:void(0);" class="icon-reponsive-menu" onclick="reponsiveMenu()">
                <i class="fa fa-bars"></i>
            </a>
        </ul>
        <ul class="search-products">
            <form action="#" method="get">
                <input type="text" class="input-search-products" placeholder="Search products...">
                <i class='fas fa-search icon-search-prducts'></i>
            </form>
        </ul>
        <ul class="contact">
            <button class="btn-contact"><i class='fas fa-phone icon-contact'></i></button><span
                class="number-phone-contact">&ensp;0946613608</span>
        </ul>
    </div>
</div>