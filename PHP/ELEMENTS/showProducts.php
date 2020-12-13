<div class="body-show-products">
    <div class="left-show-products">
        <div class="item-left-show-products">
            <div class="tile-left-show-products">
                <h2 class="title-products-left">ĐÁNH GIÁ CÁO</h2>
            </div>
            <div class="row-list-products">
            <?php 
            $products1 = "SELECT * FROM products LIMIT 5";
            $resultProducts1 = $connection->query($products1);
            while ($element = $resultProducts1->fetch_assoc()) {
               include('elementListProducts.php');
            }
            ?>
            </div>
        </div>
    </div>
    <div class="center-show-products">
    </div>
    <div class="right-show-products">
        <div class="title-show-products">
            <h1>SẢN PHẨM MỚI NHẤT</h1>
        </div>
        <div class="row-products">
            <div class="row">
                <?php
                $products = "SELECT * FROM products LIMIT 5";
                $resultProducts = $connection->query($products);
                while ($element = $resultProducts->fetch_assoc()) {
                   include('elementProducts.php');
                }
                ?>
            </div>
        </div>
        <div class="title-show-products">
            <h1>SẢN PHẨM GIẢM GIÁ</h1>
        </div>
        <div class="row-products">
            <div class="row">
                <?php
                $products = "SELECT * FROM products WHERE discount!=0 LIMIT 5";
                $resultProducts = $connection->query($products);
                while ($element = $resultProducts->fetch_assoc()) {
                   include('elementProducts.php');
                }
                ?>
            </div>
        </div>
    </div>
</div>