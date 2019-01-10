<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->userAVote($_GET['idrec']);
    if($res==NULL){
        echo 0;
    }else{
        echo 1;
    }

?>
