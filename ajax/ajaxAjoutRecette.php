<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->ingredientExiste($_GET['nomingr']);
    if($res!=NULL){
        echo $res['nomingr'];
    }else{
        echo 'oui';
    }

?>
