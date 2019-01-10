<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $modele->voteMoins($_GET['idrec'], $_GET['idUser']);
?>
