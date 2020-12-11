<?php
require_once('../../DATA/connection.php');
if (isset($_POST['btnAddProducts'])) {
    addProducts($connection);
}

function addProducts($connection)
{
    $name = $_POST['nameProducts'];
    $slug = $_POST['slugProducts'];
    $categories = $_POST['categories'];
    $brands = $_POST['brands'];
    $price = $_POST['priceProducts'];
    $priceSales = $_POST['priceSales'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $listImage = $_POST['listImage'];
    $discount = 0;
    if ($priceSales != "") {
        $discount = ($price * 100) / $priceSales;
    } else {
        $priceSales = 0;
    }
    // Details products
    $sizeScreen = $_POST['sizeScreen'];
    $resolutionPhone = $_POST['resolutionPhone'];
    $colors = $_POST['colors'];
    $systems = $_POST['systems'];
    $weightPhone = $_POST['weightPhone'];
    $memoryPhone = $_POST['memoryPhone'];
    $camera = $_POST['cameraPhone'];
    $pin = $_POST['pinPhone'];
    // Check insert
    $checkNameProducts = "SELECT * FROM products WHERE name_products= '$name'";
    $resultCheckName = $connection->query($checkNameProducts);
    $checkImage = "SELECT * FROM products WHERE image_products='$image'";
    $resultCheckImage = $connection->query($checkImage);
    if ($resultCheckName->num_rows > 0) {
        $error = "Name products already exist !";
        header("location:../../FONT_END/ADMIN/addProducts.php?errorAdd=$error");
    } elseif ($resultCheckImage->num_rows > 0) {
        $error = "Image products already exist !";
        header("location:../../FONT_END/ADMIN/addProducts.php?errorAdd=$error");
    } else {

        $date = date("Y-m-d");
        $insertProduct = "INSERT INTO products(id_categories,id_brands,slug_products,
        name_products,image_products,list_image_products,price_products,
        old_price_products,discount,description,status,create_date)
        value($categories,$brands,'$slug','$name','$image','$listImage','$price',
       '$priceSales','$discount','$description',0,'$date')";
        $resultInsert = $connection->query($insertProduct);
        if ($resultInsert === true) {
            $products = "SELECT * FROM products WHERE name_products='$name'";
            $products = $connection->query($products);
            $idProducts=0;
            foreach ($products as $element) {
                $idProducts = $element['id'];
            }
            $insertDetails ="INSERT INTO details(id_products,id_color,id_system,size_screen_phone,
             resolution_phone,weight_phone,memory_phone,camera_phone,pin_phone)
                    value($idProducts,$colors,$systems,'$sizeScreen','$resolutionPhone',
                    '$weightPhone','$memoryPhone','$camera','$pin')";
                   $resultInsertDetails=$connection->query($insertDetails);
                if ($resultInsertDetails === true) {
                    header("location:../../FONT_END/ADMIN/products.php");
                }else{
                    $error = "Products already exist !";
                    header("location:../../FONT_END/ADMIN/addProducts.php?errorAdd=$error");
                }
        } else {
            $error = "Products already exist !";
            header("location:../../FONT_END/ADMIN/addProducts.php?errorAdd=$error");
        }
    }
}
