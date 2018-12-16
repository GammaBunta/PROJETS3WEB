$(document).ready(function(){

    $("#range").slider({
        formatter : function(value){
            if(value==1){
                return "Très facile";
            }else if(value==2){
                return "Facile";
            }else{
                return "Difficle";
            }
        }
    });


});
