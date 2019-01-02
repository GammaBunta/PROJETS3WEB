<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getIngredients($_GET['famille']);
    echo $array;
?>
