function getSlug() {
    var nameProducts = document.getElementById("nameProducts").value.toLowerCase();
    var checkname = nameProducts.split(" ");
    var arraySlug = "";
    checkname.forEach(element => {
        arraySlug = arraySlug + element + "-";
    });
    document.getElementById("slugProducts").value = arraySlug.slice(0, -1);
}
