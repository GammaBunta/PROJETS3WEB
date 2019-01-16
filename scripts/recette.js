var id;

function setId(idUser){
  id = idUser;
}


function onLoad(co){
    idrecette =  document.URL.charAt( document.URL.length - 1 );
    if(co){
        $.get("./ajax/ajaxVerifVoteRecette.php", {idrec : idrecette , idUser : id}).done(function(data){
            if(data==1){
                alert("deja vote");
                document.getElementById("plusAvis").disabled = true;
                document.getElementById("moinsAvis").disabled = true;
            }else{
                document.getElementById("plusAvis").disabled = false;
                document.getElementById("moinsAvis").disabled = false;
            }
        });


    }
}

function moinsAvis(){
    idrecette =  document.URL.charAt( document.URL.length - 1 );
    $.get("./ajax/ajaxMoinsRecette.php", {idrec : idrecette, idUser : id}).done(function(data){
        window.location.replace("index.php?module=Recettes&action=affichageSpecial&id="+idrecette);
    });
}

function plusAvis(){
    idrecette =  document.URL.charAt( document.URL.length - 1 );
    $.get("./ajax/ajaxPlusRecette.php", {idrec : idrecette, idUser : id}).done(function(data){
        window.location.replace("index.php?module=Recettes&action=affichageSpecial&id="+idrecette);
    });
}

function disableVoteButton(){
    document.getElementById("myBtn").disabled = true;

}
