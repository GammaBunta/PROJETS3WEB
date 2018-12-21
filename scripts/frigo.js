$(document).ready(function(){
    $("#lait").click(function(){
        document.getElementById("titre").innerHTML="Produits Laitiers";
        $.get("./ajax/ajaxFrigo.php", {famille : "Produits Laitiers"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#viandes").click(function(){
        document.getElementById("titre").innerHTML="Viandes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Viandes"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#legumes").click(function(){
        document.getElementById("titre").innerHTML="Legumes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Legumes"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#fruits").click(function(){
        document.getElementById("titre").innerHTML="Fruits";
        $.get("./ajax/ajaxFrigo.php", {famille : "Fruits"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#feculents").click(function(){
        document.getElementById("titre").innerHTML="Féculents";
        $.get("./ajax/ajaxFrigo.php", {famille : "Feculents"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#condiments").click(function(){
        document.getElementById("titre").innerHTML="Condiments";
        $.get("./ajax/ajaxFrigo.php", {famille : "Condiments"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);


    $("#autres").click(function(){
        document.getElementById("titre").innerHTML="Autres";
        $.get("./ajax/ajaxFrigo.php", {famille : "Autre"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#epicerie").click(function(){
        document.getElementById("titre").innerHTML="Epicerie";
        $.get("./ajax/ajaxFrigo.php", {famille : "Epicerie"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);


function ajoutCuisiner(nomingr){
    var li = document.getElementById(nomingr);
    if(!document.getElementById("aCuisiner").contains(li) && document.getElementById("aCuisiner").getElementsByTagName("li").length < 8){
        var brut= '<li href="#" id="'+nomingr+'" class="list-group-item list-group-item-action list-group-item-success text-left">'+nomingr+'<button type="button" onclick="retirerElement(\''+nomingr+'\')" class="btn btn-success float-right" >-</button></li>';
        document.getElementById("aCuisiner").innerHTML+=brut;
    }
}

function retirerElement(nomingr){
    var el = document.getElementById(nomingr);
    el.parentNode.removeChild(el);
}

function chercherRecettes(){
    if(document.getElementById("aCuisiner").getElementsByTagName("li").length >0){
        var IDs = [];
        $("#aCuisiner").find("li").each(function(){ IDs.push(this.id); });
        JSON.stringify(IDs);
        window.location.replace("index.php?module=Recettes&action=rechercheSpeciale&ingredients="+IDs);
    }else{
        alert("il faut ajouter des ingrédients à cuisiner ! ");
    }


}
