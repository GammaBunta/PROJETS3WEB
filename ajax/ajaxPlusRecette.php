<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $modele->votePlus($_GET['idrec'], $_GET['idUser']);
?>
