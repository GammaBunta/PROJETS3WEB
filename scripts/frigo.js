var id;

function setId(idUser){
  id = idUser;
}

$(document).ready(function(){
    $("#lait").click(function(){
        document.getElementById("titre").innerHTML="Produits Laitiers";
        document.getElementById("titre1").innerHTML="Ajouter Produits Laitiers";
        $.get("./ajax/ajaxFrigo.php", {famille : "Produits Laitiers", id: id}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#viandes").click(function(){
        document.getElementById("titre").innerHTML="Viandes";
        document.getElementById("titre1").innerHTML="Ajouter Viandes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Viandes", id: id}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#legumes").click(function(){
        document.getElementById("titre").innerHTML="Legumes";
        document.getElementById("titre1").innerHTML="Ajouter Legumes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Legumes", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#fruits").click(function(){
        document.getElementById("titre").innerHTML="Fruits";
        document.getElementById("titre1").innerHTML="Ajouter Fruits";
        $.get("./ajax/ajaxFrigo.php", {famille : "Fruits", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#feculents").click(function(){
        document.getElementById("titre").innerHTML="Féculents";
        document.getElementById("titre1").innerHTML="Ajouter Féculents";
        $.get("./ajax/ajaxFrigo.php", {famille : "Feculents", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#condiments").click(function(){
        document.getElementById("titre").innerHTML="Condiments";
        document.getElementById("titre1").innerHTML="Ajouter Condiments";
        $.get("./ajax/ajaxFrigo.php", {famille : "Condiments", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);


    $("#autres").click(function(){
        document.getElementById("titre").innerHTML="Autres";
        document.getElementById("titre1").innerHTML="Ajouter Autres";
        $.get("./ajax/ajaxFrigo.php", {famille : "Autre", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);

    $("#epicerie").click(function(){
        document.getElementById("titre").innerHTML="Epicerie";
        $.get("./ajax/ajaxFrigo.php", {famille : "Epicerie", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

function moinsAvis(){

}

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
