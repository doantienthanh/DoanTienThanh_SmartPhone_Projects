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
        <div class="col-2  right-main-header">
            <div class="quantity-customer-cart">0</div>
            <span><i class='fas fa-shopping-basket customer-cart'></i></span>
            <span class="price-customer-carts">20000000đ</span>
        </div>
    </div>
    <div class="menu-header">
        <ul class="item-menu-header" id="listMenu">
            <li class="item-menu active"><a href="#"><i class='fas fa-home icon-homepage'></i>&nbsp;HOME</a></li>
            <li class="item-menu"><a href="#">PRODUCTS</a></li>
            <li class="item-menu"><a href="#">ACCESSORIES</a></li>
            <li class="item-menu"><a href="#">ABOUT US</a></li>
            <li class="item-menu"><a href="#">HELPS</a></li>
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