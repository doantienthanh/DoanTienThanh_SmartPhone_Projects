<?php
require_once('../../DATA/connection.php');
if (!isset($_REQUEST['search_input'])) {
        header('location:homepage.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="../../../CSS/Header.CSS">
    <link rel="stylesheet" href="../../../CSS/Element.CSS">
    <link rel="stylesheet" href="../../../CSS/Bottom.CSS">
    <link rel="stylesheet" href="../../../CSS/Reponsive.CSS">
    <link rel="stylesheet" href="../../../CSS/ShowProducts.CSS">
    <link rel="stylesheet" href="../../../CSS/Search.CSS">
</head>

<body>
    <?php
    include('../../ELEMENTS/header.php');
    ?>
    <div class="body-search-page">
        <div class="col-2 category">
            <?php
        include('../../ELEMENTS/categories.php');
      ?>
        </div>
        <div class="col-10 body-result-search">
            <?php 
        $search_name=$_REQUEST['search_input'];
        
        $products="SELECT * FROM products WHERE name_products LIKE '%".$search_name."%'";
        $resultSearch=$connection->query($products);
        $count=$resultSearch->num_rows;
      
        if($resultSearch->num_rows<1){
            echo"<h1>KẾT QUẢ CHO (".$count."):<span class='result_search_titals'>&ensp;Không có kết quả mong muốn</span></h1>";
        }else{
            echo"<h1>KẾT QUẢ CHO (".$count."):<span class='result_search_titals'>&ensp;".$search_name."</span></h1>";
            foreach($resultSearch as $element){
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