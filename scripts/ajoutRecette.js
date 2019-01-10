var ingredients = [];
var quantites=[];


function ingrExiste(){
    var lenomingr = document.getElementById("ingredient").value;
    var quantite = document.getElementById("unite").value;

    $.get("./ajax/ajaxAjoutRecette.php", {nomingr : lenomingr}).done(function(data){
        if(data==lenomingr){
            var li='<li href="#" class="list-group-item list-group-item-action list-group-item-success text-left" id="'+lenomingr+'">'+quantite+' de '+lenomingr+'<button type="button" onclick="retirerIngr(\''+lenomingr+'\')" class="btn btn-success float-right" >-</button></li>'
            var oui = document.getElementById(lenomingr);
            if(!document.getElementById("listeingr").contains(oui)){
                document.getElementById("listeingr").innerHTML+=li;
                quantites.push(quantite);
                ingredients.push(lenomingr);
            }else{
                alert("vous avez déjà ajouté cet ingrédient");
            }
        }else{
            alert("cet ingrédient n'existe pas !");
        }
    });

}

function retirerIngr(nomingr){
    var el = document.getElementById(nomingr);
    el.parentNode.removeChild(el);
    for(var i=0; i<ingredients.length;i++){
        if(ingredients[i]==nomingr){
            ingredients.splice(i,1);
            quantites.splice(i,1);
        }
    }
}

$(document).ready(function(){
    $('#form').submit(function(){
        if(ingredients.length==0){
            alert("Il n'y a pas d'ingrédients dans votre recette ! ");
            return false;
        }
        var container = document.getElementById("form");
        var inputq = document.createElement("input");
        inputq.type="text";
        inputq.name = "listeQuantites";
        inputq.value=quantites;
        container.appendChild(inputq);
        var inputi = document.createElement("input");
        inputi.type="text";
        inputi.name="listeIngredients";
        inputi.value=ingredients;
        container.appendChild(inputi);
        return true;
    });

    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
}
);
