<?php
echo'
<div class="show-products-left">
<a href="details.php?product='.$element['slug_products'].'" class="link-show-left-products">
    <div class="image-left-products">
        <img src="../../../IMAGE/'.$element['image_products'].'" class="image-products-show-left">
    </div>
    <div class="information-left-products">
        <h6 class="name-smart-phone-left">'.strtoupper($element['name_products']).'</h6>
        <span class="price-products-left">'.number_format($element['price_products'],0,",",".").'</span><span><sup>đ</sup></span>
        <p class="infor-smart-phone">'.$element['description'].'</p>
    </div>
</a>
</div>
';
?>