<?php
require_once('../../DATA/connection.php');
if(!isset($_COOKIE['id_user'])){
     $massage="Bạn cần login trước khi vào trang này!";
     header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage");
}
function getIdUser(){
     if(isset($_COOKIE['id_user'])){
          return true;
     }else{
          return false;
     }
}

if(isset($_POST['btn_add_to_cart'])){
     if(getIdUser()==true){
          addCart($connection);
     }else{
      $massage="Bạn cần login trước khi mua hàng !";
      header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage");
     }
}
if(isset($_POST['btn_minus'])){
     if(getIdUser()==true){
          minusProducts($connection);
     }else{
      $massage="Bạn cần login trước khi mua hàng !";
      header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage");
     }
}
if(isset($_POST['btn_plus'])){
     if(getIdUser()==true){
         plusProducts($connection);
     }else{
      $massage="Bạn cần login trước khi mua hàng !";
      header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage");
     }
}
function addCart($connection){
$quantity=0;
if(isset($_POST['quantity_orders'])){
     $quantity=$_POST['quantity_orders'];
}else{
     $quantity=1;
}
$slug_productss=$_GET['orders'];
$products="SELECT * FROM products WHERE slug_products='$slug_productss'";
$resultProducts=$connection->query($products);
$id_product=0;
while ($element = $resultProducts->fetch_assoc()) {
     $id_product=$element['id'];
}
$id_user=json_decode(base64_decode($_COOKIE['id_user']));
$carts="SELECT * FROM carts WHERE id_user='$id_user' AND id_product='$id_product'";
$resultCart=$connection->query($carts);
$quantityUpdate=0;
while ($element = $resultCart->fetch_assoc()) {
     $quantityUpdate=$element['quantity'];
  }
if($resultCart->num_rows>0){
     $quantityUpdate=$quantityUpdate+$quantity;
     $updateCart="UPDATE carts SET quantity = $quantityUpdate WHERE id_user='$id_user' AND id_product='$id_product'";
     $connection->query($updateCart);
     $massage="Thêm sản phẩm vào giỏ hàng thành công !";
     header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage"); 
}else{
     $created_date=date("Y-m-d");
     $addCart="INSERT INTO carts(id_user,id_product,quantity,created_date)
     VALUES ($id_user,$id_product,$quantity,'$created_date')";
     $connection->query($addCart); 
     $massage="Thêm sản phẩm vào giỏ hàng thành công !";
     header("location:../../FONT_END/USERS/homepage.php?massageAddCart=$massage");   
}
}
function plusProducts($connection){
    $id=$_GET['slug_products_plus'];
    $id_user=json_decode(base64_decode($_COOKIE['id_user']));
    $quantityCartUpdate=0;
    $products="SELECT * FROM carts WHERE id_product='$id' AND id_user='$id_user'";
    $resultProduct=$connection->query($products);
    while ($element = $resultProduct->fetch_assoc()) {
        $quantityCartUpdate=$element['quantity'];
     }
     $quantityFinal=$quantityCartUpdate + 1;
     $updateQuantityCart="UPDATE carts SET quantity = $quantityFinal WHERE id_user='$id_user' AND id_product='$id'";
     $connection->query($updateQuantityCart);
     header("location:../../FONT_END/USERS/carts.php");
}

function minusProducts($connection){
     $id=$_GET['slug_products_plus'];
     $id_user=json_decode(base64_decode($_COOKIE['id_user']));
     $quantityCartUpdate=0;
     $products="SELECT * FROM carts WHERE id_product='$id' AND id_user='$id_user'";
     $resultProduct=$connection->query($products);
     while ($element = $resultProduct->fetch_assoc()) {
         $quantityCartUpdate=$element['quantity'];
      }
      if($quantityCartUpdate >1){
          $quantityFinal=$quantityCartUpdate - 1;
          $updateQuantityCart="UPDATE carts SET quantity = $quantityFinal WHERE id_user='$id_user' AND id_product='$id'";
          $connection->query($updateQuantityCart);
          header("location:../../FONT_END/USERS/carts.php");
      }else{
           deleteProductCart($connection);
      }
}
if(isset($_POST['btn_delete_products_carts'])){
     deleteProductCart($connection);
}
function deleteProductCart($connection){
     $id_user=json_decode(base64_decode($_COOKIE['id_user']));
     $id_pro=$_GET['slug_products_plus'];
     $cartsDelete="DELETE FROM carts WHERE id_user='$id_user' AND id_product='$id_pro'";
     $connection->query($cartsDelete);
     header("location:../../FONT_END/USERS/carts.php");
}
// FUNCTION PAYMENT
if(isset($_POST['btn_carts_payments'])){
     payment($connection);
}
function payment($connection){
     $id_user=json_decode(base64_decode($_COOKIE['id_user']));
     $orders="SELECT * FROM carts WHERE id_user='$id_user'";
     $ordersQuery=$connection->query($orders);
}
?>