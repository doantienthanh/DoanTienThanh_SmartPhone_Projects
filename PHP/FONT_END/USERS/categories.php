<?php
require_once('../../DATA/connection.php');
if(!isset($_GET['category'])){
  if(!isset($_GET['brands'])){
    header('location:homepage.php');
  }
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
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <link rel="stylesheet" href="../../../CSS/ShowProducts.CSS">
    <link rel="stylesheet" href="../../../CSS/Categories.CSS">
</head>
<body>
<?php
    include('../../ELEMENTS/header.php');
    ?>
    <div class="body-categories">
      <div class="col-2 category">
      <?php
        include('../../ELEMENTS/categories.php');
      ?>
      </div>
        <div class="col-10 body-products-category">
        <?php
        if(isset($_GET['category'])){
          $id_category=$_GET['category'];
          $productsOfCategories="SELECT * FROM products WHERE id_categories='$id_category'";
          $queryProducts=$connection->query($productsOfCategories);
          while ($element = $queryProducts->fetch_assoc()) {
           include('../../ELEMENTS/elementProducts.php');
           }
        }else{
          $id_brands=$_GET['brands'];
          $productsOfBrands="SELECT * FROM products WHERE id_brands='$id_brands'";
          $queryProducts=$connection->query($productsOfBrands);
          while ($element = $queryProducts->fetch_assoc()) {
           include('../../ELEMENTS/elementProducts.php');
           }
        }
         
        ?>
        </div>
    </div>
    <?php
    include('../../ELEMENTS/bottom.php');
    ?>
<script src='../../../JS/Reponsive.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>