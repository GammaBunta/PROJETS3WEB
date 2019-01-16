<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->ajoutIngredients($_GET['idUser'], $_GET['quantite'], $_GET['idingr'],$_GET['date']);
    echo $res['nomingr'];
?>
