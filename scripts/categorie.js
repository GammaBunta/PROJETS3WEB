$(document).ready(function(){
    $("#lait").click(function(){
        document.getElementById("titre").innerHTML="Produits Laitiers";
        $.get("./ajax/test.php", {famille : "Produits Laitiers"}).done(function(data){
            document.getElementById("listeIngr").innerHTML= data;
        });
    }
);
}
);

        function viandes(){
                    document.getElementById("titre").innerHTML="Viandes";
        }
        function legumes(){
                    document.getElementById("titre").innerHTML="Légumes";
        }
        function fruits(){
                    document.getElementById("titre").innerHTML="Fruits";
        }
        function feculents(){
                    document.getElementById("titre").innerHTML="Feculents";
        }
        function condiments(){
                    document.getElementById("titre").innerHTML="Condiments";
        }
		  function autres(){
                    document.getElementById("titre").innerHTML="Autres";
        }
        function epicerie(){
                    document.getElementById("titre").innerHTML="Epicerie";
        }
