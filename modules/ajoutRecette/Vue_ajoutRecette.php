<?php
require_once('./ClassesGeneriques/vue_generique.php');
class Vue_ajoutRecette extends VueGenerique{

    public function __construct(){
        parent::__construct();
    }


    public function afficheInit(){
        echo '
        <head>
            <?php include "./composants/head.php"; ?>
            <script type="text/javascript" src="./scripts/ajoutRecette.js"> </script>
        </head>
        <body>
            <main class="mt-5 row align-items-center justify-content-center"">
            <form action="./index.php?module=ajoutRecette&action=publier" enctype="multipart/form-data" method="post" id="form" >
                <div class="container ">
                    <div class="row">
                        <div class="col-">

                                <div class="form-group ">
                                    <label>Nom de la recette</label>
                                    <input type="text" class="form-control"  id="nomRecette" name="nomRecette" placeholder="Nom de la Recette" required>
                                </div>

                                <div class="form-group">
                                    <label>Catégorie</label>
                                    <select class="form-control-sm float-right" name="categorie" required>
                                        <option>Entrée</option>
                                        <option>Plat</option>
                                        <option>Dessert</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Niveau</label>
                                    <select class="form-control-sm float-right " name="niveau" required>
                                        <option>Très Facile</option>
                                        <option>Facile</option>
                                        <option>Intermédiaire</option>
                                        <option>Difficile</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Végétarien</label>
                                    <div class="form-check form-check-inline" >
                                        <input class="form-check-input" type="radio" name="optionsVege" id="ouivegetarien" value="option1" >
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="optionsVege" id="nonvegetarien" value="option2" checked>
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Sans Gluten</label>
                                    <div class="form-check form-check-inline" >
                                        <input class="form-check-input" type="radio" name="optionsGluten" id="ouiGlutenFree" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Oui</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="optionsGluten" id="nonGlutenFree" value="option2" checked>
                                        <label class="form-check-label" for="inlineRadio2">Non</label>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-sm-3">
                                        <input type="number" min="1" value="1" class="form-control " name="nbPers" placeholder="2" required>
                                    </div>
                                    <label for="npPers" class="col-form-label">Personnes</label>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-sm-3">
                                        <input type="number"  value="0" min="0" class="form-control " name="tpsPrepa" placeholder="20" required>
                                    </div>
                                    <label for="npPers" class="col-form-label">min de préparation</label>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-sm-3">
                                        <input type="number"  min="0"  value="0" class="form-control " name="tpsRepos" placeholder="30" required>
                                    </div>
                                    <label for="npPers" class="col-form-label">min de repos</label>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-sm-3">
                                        <input type="number"  min="0"  value="0" class="form-control " name="tpsCuisson" placeholder="60" required>
                                    </div>
                                    <label for="npPers" class="col-form-label">min de cuisson</label>
                                </div>
                                <div class="form-group row ">
                                    <div class="custom-file">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                        <span class="btn btn-default btn-file">
                                            <input type="file" class="custom-file-input"  name="imageRecette"  accept=".png, .jpg, .jpeg" id="imgaeRecette">
                                        </span>
                                        <label class="custom-file-label" for="customFile">Photo du plat<label>
                                        <img id="img-upload"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md ml-5 mt-5 border-left-3 border-success">
                                    <div class="row">
                                        <div class="col-7 mt-5">
                                            <div class="form-group row ">
                                                <div class="col-md-5">
                                                    <input type="text"  class="form-control " id="unite" name="unite" placeholder="Quantité">

                                                </div>
                                                <label for="npPers" class="col-form-label">(de)</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <input type="text"  class="form-control " id="ingredient" placeholder="Ingrédient" >
                                                    </div>
                                                </div>
                                                <button type="button" onclick="ingrExiste()" class="btn btn-success float-right" >+</button>
                                            </div>
                                        </div>
                                        <div class="col-5 ">
                                            <label>Dans la recette il y a ...</label>
                                            <div class="pre-scrollable border border-secondary" style="height: 120.2px;" >
                                                <ul class="list-group" id="listeingr">
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label>Instructions de la recette</label>
                                    <textarea class="form-control" name="texteRecette" rows="12"  required></textarea>
                                </div>
                                <div class="row ml-5">
                                    <button type="submit" class="btn btn-success btn-lg">Publier ma recette</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </body>';



    }

}

?>
