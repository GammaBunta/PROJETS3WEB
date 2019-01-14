<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->retirerIngredients($_GET['idUser'],$_GET['idingr']);
    
?>
