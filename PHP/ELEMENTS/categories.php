<div class="list-categories" id="listCategories">
    <div class="title-categories">
        <i class='fas fa-globe icon-categories'></i><span class="content-categories">&nbsp;CATEGORIES</span>
    </div>
        <?php
$categories='SELECT * FROM categories';
$resultCategories=$connection->query($categories);
echo "<ul class='list-item'>";
foreach($resultCategories as $element){
    if(isset($_GET['category'])){
         $id_categories=$_GET['category'];
        if($id_categories==$element['id']){
            echo "<a href='categories.php?category=".$element['id']."'  class='link-categories'><li class='item-categories item-active'><span>".$element['name_categories']."</span></li></a>";
        }else{
            echo "<a href='categories.php?category=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_categories']."</span></li></a>";
        }
    }else{
        echo "<a href='categories.php?category=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_categories']."</span></li></a>";
    }
}
$brands='SELECT * FROM brands';
$queryBrands=$connection->query($brands);
foreach($queryBrands as $element){
    if(isset($_GET['brands'])){
        $id_brands=$_GET['brands'];
       if($id_brands==$element['id']){
           echo "<a href='categories.php?brands=".$element['id']."'  class='link-categories'><li class='item-categories item-active'><span>".$element['name_brand']."</span></li></a>";
       }else{
           echo "<a href='categories.php?brands=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_brand']."</span></li></a>";
       }
   }else{
       echo "<a href='categories.php?brands=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_brand']."</span></li></a>";
   }
}
echo"</ul>";
?>
</div>
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_collapse_sidebar -->
<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_dropdown_navbar -->