
$(window).load(function(){
    alert("oui");
});

function moinsAvis(){
    $.get("./ajax/ajaxAjoutRecette.php", {idrec : url.charAt( url.length - 1 )}).done(function(data){

    }

}

function plusAvis(){

}

function disableVoteButton(){
    document.getElementById("myBtn").disabled = true;
    $.get("./ajax/ajaxRecette.php", {idrec : url.charAt( url.length - 1 )}).done(function(data){
        if(data==1){
            alert("deja vôté");
        }else{
            alert("pas vôté");
        }
}
