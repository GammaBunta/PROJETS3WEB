function ingrExiste(){
    var lenomingr = document.getElementById("ingredient").value;
    var quantite = document.getElementById("unite").value;
    $.get("./ajax/ajaxAjoutRecette.php", {nomingr : lenomingr}).done(function(data){
        if(data==lenomingr){

            var li='<li href="#" class="list-group-item list-group-item-action list-group-item-success text-left" id="'+lenomingr+'">'+quantite+' de '+lenomingr+'<button type="button" onclick="retirerIngr(\''+lenomingr+'\')" class="btn btn-success float-right" >-</button></li>'
            var oui = document.getElementById(lenomingr);
            if(!document.getElementById("listeingr").contains(oui)){
                document.getElementById("listeingr").innerHTML+=li;
            }else{
                alert("il y en a déjà dans la recette !");
            }
        }else{
            alert("cet ingrédient n'existe pas !")
        }
    });

}

function retirerIngr(nomingr){
    var el = document.getElementById(nomingr);
    el.parentNode.removeChild(el);
}
