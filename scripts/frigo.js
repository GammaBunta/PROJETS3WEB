$(document).ready(function(){
    $("#lait").click(function(){
        document.getElementById("titre").innerHTML="Produits Laitiers";
        $.get("./ajax/ajaxFrigo.php", {famille : "Produits Laitiers"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#viandes").click(function(){
        document.getElementById("titre").innerHTML="Viandes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Viandes"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#legumes").click(function(){
        document.getElementById("titre").innerHTML="Legumes";
        $.get("./ajax/ajaxFrigo.php", {famille : "Legumes"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#fruits").click(function(){
        document.getElementById("titre").innerHTML="Fruits";
        $.get("./ajax/ajaxFrigo.php", {famille : "Fruits"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#feculents").click(function(){
        document.getElementById("titre").innerHTML="Féculents";
        $.get("./ajax/ajaxFrigo.php", {famille : "Feculents"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#condiments").click(function(){
        document.getElementById("titre").innerHTML="Condiments";
        $.get("./ajax/ajaxFrigo.php", {famille : "Condiments"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
    $("#autres").click(function(){
        document.getElementById("titre").innerHTML="Autres";
        $.get("./ajax/ajaxFrigo.php", {famille : "Autre"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

$(document).ready(function(){
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
    var brut= '<li href="#" class="list-group-item list-group-item-action list-group-item-success">'+nomingr+'</li>';
    document.getElementById("aCuisiner").innerHTML+=brut;
}
