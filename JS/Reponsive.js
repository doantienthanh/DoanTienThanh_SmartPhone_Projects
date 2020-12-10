function reponsiveMenu() {
    var x = document.getElementById("listMenu");
    if (x.className === "item-menu-header") {
      x.className += " responsive-menus";
    } else {
      x.className = "item-menu-header";
    }
  }
  function openMenuAdmin() {
    document.getElementById("mySidebar").style.width = "150px";
    document.getElementById("main").style.marginLeft = "150px";
  }
  
  function closeMenuAdmin() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }