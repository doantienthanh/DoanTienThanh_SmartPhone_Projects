function reponsiveMenu() {
    var x = document.getElementById("listMenu");
    if (x.className === "item-menu-header") {
      x.className += " responsive-menus";
    } else {
      x.className = "item-menu-header";
    }
  }

  function reponsiveCategory(){
    var y=document.getElementById("listCategories");
    if(y.className === "list-categories"){
y.className += " reponsive-categories";
    }else{
y.className = "list-categories";
    }
  }