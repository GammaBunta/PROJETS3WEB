<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->userAVote($_GET['idrec'], $_GET['idUser']);
    if($res){
        echo 1;
    }
    else{
        echo 0;
    }

?>
