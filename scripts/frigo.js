var id;

function setId(idUser){
  id = idUser;
}


$(document).ready(function(){
    var bouton = "<button type=\"button\" class=\"btn btn- btn-success\" onclick=\"refresh()\"><img style=\"height: 20px;\" src=\"./Images/refresh.png\" alt=\"pouce vers le haut \"</button>"
    $("#lait").click(function(){
        document.getElementById("titre").innerHTML="Produits Laitiers"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Produits Laitiers";
        $.get("./ajax/ajaxFrigo.php", {famille : "Produits Laitiers", id: id}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Produits Laitiers"}).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#viandes").click(function(){
        document.getElementById("titre").innerHTML="Viandes"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Viandes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Viandes", id: id}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Viandes"}).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#legumes").click(function(){
        document.getElementById("titre").innerHTML="Legumes"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Legumes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Legumes", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Legumes"}).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#fruits").click(function(){
        document.getElementById("titre").innerHTML="Fruits"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Fruits";
        $.get("./ajax/ajaxFrigo.php", {famille : "Fruits", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Fruits"}).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#feculents").click(function(){
        document.getElementById("titre").innerHTML="Féculents"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Féculents";
        $.get("./ajax/ajaxFrigo.php", {famille : "Feculents", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Feculents" }).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#condiments").click(function(){
        document.getElementById("titre").innerHTML="Condiments"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Condiments";
        $.get("./ajax/ajaxFrigo.php", {famille : "Condiments", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Condiments" }).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);


    $("#autres").click(function(){
        document.getElementById("titre").innerHTML="Autres"+bouton;
        document.getElementById("titre1").innerHTML="Ajouter Autres";
        $.get("./ajax/ajaxFrigo.php", {famille : "Autre", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Autre" }).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }
);

    $("#epicerie").click(function(){
        document.getElementById("titre").innerHTML="Epicerie"+bouton;
        $.get("./ajax/ajaxFrigo.php", {famille : "Epicerie", id : id }).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
        $.get("./ajax/ajaxFrigoTout.php", {famille : "Epicerie" }).done(function(data){
            document.getElementById("listeIngrTout").innerHTML= data;
            minDate();
        });
    }

);


});

function submitAjoutFrigo(idingr){
    var quantite = document.getElementById("quantite"+idingr).value;
    var date = document.getElementById("date"+idingr).value;
    if(date!=0 && quantite!=0){
        $.get("./ajax/ajaxModifFrigo.php", {quantite : quantite, date : date , idUser : id , idingr : idingr}).done(function(data){
        });
        triggerFamille(idingr);
    }
}

function retirerun(idingr){
    $.get("./ajax/ajaxFrigoRetirer.php", {idingr:idingr, idUser : id }).done(function(data){
        triggerFamille(idingr);
    });
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
        window.location.replace("index.php?module=RechercheRecettes&action=rechercheSpeciale&ingredients="+IDs);
    }else{
        alert("il faut ajouter des ingrédients à cuisiner ! ");
    }


}



function minDate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }
    today = yyyy+'-'+mm+'-'+dd;
    var dates = document.getElementsByClassName("date");
    for (i=0;i<dates.length;i++){
        dates[i].setAttribute("min", today);
    }
}


function triggerFamille(idingr){
    $.get("./ajax/ajaxInfoIngr.php", {idingr:idingr}).done(function(data){
        if(data=="Fruits"){
            $("#fruits").trigger( "click" );
        }else if(data=="Legumes"){
            $("#legumes").trigger( "click" );
        }else if(data=="Feculents"){
            $("#feculents").trigger( "click" );
        }else if(data=="Viandes"){
            $("#viandes").trigger( "click" );
        }else if(data=="Autres"){
            $("#autres").trigger("click");
        }else if(data=="Epicerie"){
            $("#epicerie").trigger("click");
        }else if(data=="Condiments"){
            $("#condiments").trigger("click");
        }else{
            $("#lait").trigger("click");
        }
    });
}
