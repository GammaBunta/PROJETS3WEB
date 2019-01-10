<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->ingredientExiste($_GET['nomingr']);
?>
