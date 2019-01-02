function ingrExiste(){
    var lenomingr = document.getElementById("ingredient");
    $.get("./ajax/ajaxAjoutRecette.php", {nomingr : lenomingr}).done(function(data)){
        
    });
    }
}
