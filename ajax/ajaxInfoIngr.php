<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $res = $modele->getinfoIngr($_GET['idingr']);
    echo $res['famille'];
?>
