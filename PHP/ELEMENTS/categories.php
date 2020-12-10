<div class="list-categories" id="listCategories">
    <div class="title-categories">
        <i class='fas fa-globe icon-categories'></i><span class="content-categories">&nbsp;CATEGORIES</span>
    </div>
        <?php
$categories='SELECT * FROM categories';
$resultCategories=mysqli_query($connection, $categories);
echo "<ul class='list-item'>";
foreach($resultCategories as $element){
    if(isset($_GET['category'])){
         $id_brands=$_GET['category'];
        if($id_brands==$element['id']){
            echo "<a href='categories.php?category=".$element['id']."'  class='link-categories'><li class='item-categories'><span>".$element['name_categories']."</span></li></a>";
            echo"<hr style='height:5px;border-width:0;color:gray;background-color:red'/>";  
        }else{
            echo "<a href='categories.php?category=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_categories']."</span></li></a>";
        }
    }else{
        echo "<a href='categories.php?category=".$element['id']."' class='link-categories'><li class='item-categories'><span>".$element['name_categories']."</span></li></a>";
    }
}
echo"</ul>";
?>
</div>
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_collapse_sidebar -->
<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_dropdown_navbar -->