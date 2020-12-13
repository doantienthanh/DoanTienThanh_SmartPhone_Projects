<?php
 if ($element['discount'] == 0) {
    echo '
<div class="col-2 col-s-4">
<a href="details.php?product='.$element['slug_products'].'" class="link-item-products">
    <div class="item-products" onmouseover="onAddToCart('.$element['id'].')" onmouseout="outAddToCart('.$element['id'].')">
        <div class="header-card-products">
            <img src="../../../IMAGE/'.$element['image_products'].'" class="image-card-products">
        </div>
        <div class="center-card-products">
            <h4 class="name-of-phone">'.strtoupper($element['name_products']).'</h4>
            <p class="price-of-phone">'.number_format($element['price_products'],0,",",".").'<sup>đ</sup></p>
        </div>
        <div class="bootom-card-products">
            <i class="fas fa-star icon-card"></i>
            <i class="fas fa-star icon-card"></i>
            <i class="fas fa-star icon-card"></i>
            <i class="fas fa-star icon-card"></i>
            <i class="fas fa-star icon-card"></i>
        </div>
        <button class="add-to-cart-card" id="'.$element['id'].'">
            <i class="fas fa-shopping-basket icon-add-to-carts"></i>
        </button>
    </div>
</a>
</div>
';
} else {
    echo '
<div class="col-2 col-s-4">
<a href="details.php?product='.$element['slug_products'].'" class="link-item-products">
<div class="item-products" onmouseover="onAddToCart('.$element['id'].')" onmouseout="outAddToCart('.$element['id'].')">
<div class="header-card-products">
<button class="btn-sales">-'.$element['discount'].'%</button>
<img src="../../../IMAGE/'.$element['image_products'].'" class="image-card-products">
</div>
<div class="center-card-products">
<h4 class="name-of-phone">'.strtoupper($element['name_products']).'</h4>
<p class="price-of-phone"><b class="priceSales"><sup>'.number_format($element['old_price_products'],0,",",".").'<sup>đ</sup></b></sup> <span
class="prices"><sub><strike>'.number_format($element['price_products'],0,",",".").'<sup>đ</sup></strike></sub></span></p>
</div>
<div class="bootom-card-products">
<i class="fas fa-star icon-card"></i>
<i class="fas fa-star icon-card"></i>
<i class="fas fa-star icon-card"></i>
<i class="fas fa-star icon-card"></i>
<i class="fas fa-star icon-card"></i>
</div>
<button class="add-to-cart-card" id="'.$element['id'].'">
<i class="fas fa-shopping-basket icon-add-to-carts"></i>
</button>
</div>
</a>
</div>
';
}
?>