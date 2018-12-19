<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Recettes extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit(){
            echo '
<head>
    <?php
        include "head.php";
    ?>
    <link rel="stylesheet" type="text/css" href="./CSS/styles_recettes.css">

    <script>
        function alerteChgmntPage() {
            return confirm("Vous allez changer de page !");
            
        }
    </script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <!-- Corps du site -->
    <!-- Debut corps de la page -->

    <!-- Debut entete recherche -->
    <div class="row justify-content-md-center p-3 md-3">
        <div class="container m-3 bg-success">
            <div class="row justify-content-md-center p-4">
                <h3>
                    Trouvez votre recette parmi notre base de données
                </h3>
            </div>
            <div class="form-group">
                <div class="pl-3 row input-group">
                    <input type="text" class="form-control" placeholder="Entrez une recette" name="inputRecette">   
                </div>
                <!-- Debut Options-->
                <div class="mt-3 mb-3 container border border-dark">
                    <div class="row mt-3">
                        <div class="col">
                            <ul>
                                <li class="row">
                                    <div>
                                        <label>Catégorie du plat : </label>
                                        <select class="form-control-sm custom-select disabled" id="inputGroupSelect01">
                                            <option value="1">Entrée</option>
                                            <option value="2">Plat Salé</option>
                                            <option value="3">Plat Sucré</option>
                                            <option value="4">Dessert</option>
                                            <option value="5">Gouter avec un circonflexe sur le u</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="row mt-2">
                                    <label class="form-check-label  row col-4">Sans gluten ?</label>
                                    <input type="checkbox" name="">
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li class="row mt-2">
                                    <label class="form-check-label col-4">Surgelé ?</label>
                                    <input type="checkbox" name="">
                                </li>
                                <li class="row mt-2">
                                    <label class="form-check-label col-4">Végétarien ?</label>
                                    <input type="checkbox" name="">
                                </li>
                                <li class="row mt-2">
                                    <label class="form-check-label col-4">Végan ?</label>
                                    <input type="checkbox" name="">
                                </li>
                            </ul>
                        </div>

                </div>
            </div>
            <div>
                <div class="row md-2 pb-2">
                    <a href="http://localhost/~avadrot/ProjetS3/information_utilisateur.php"
                        class="btn btn-success col-md-6 offset-md-3 mt-2 rounded border-dark"
                        id="tailleTxtBtn" onclick="return alerteChgmntPage()">Trouver une recette >>

                    </a>
                </div>
            </div>
            </div>
            <!-- Fin Options-->
            <div>
                <div class="row md-2 pb-2">
                    <a href="http://localhost/~avadrot/ProjetS3/information_utilisateur.php"
                        class="btn btn-success col-md-6 offset-md-3 mt-2 rounded border-dark"
                        id="tailleTxtBtn" onclick="return alerteChgmntPage()">Rechercher avec mes ingrédients du frigo</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin entete recherche-->
    <!-- Fin corps du site -->
    <!-- Fin corps de la page -->
    <?php
        include "footer.php";
    ?>
</body>
            ';
        }

        public function afficherRechercheSpeciale($array){
            foreach($array as $item){
                 echo utf8_encode(' </br> Titre : '.$item['titre'].' </br> nb personne : '.$item['nbpers'].' </br> Categorie : '.$item['categorie'].' </br> Texte : '.$item['textrec']);
           }
        }

    }
?>
