<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Compte extends VueGenerique{

        private $erreur;
        public function __construct(){
            parent::__construct();
            $this->erreur ="";
        }

        public function setErreur($er){
          $this->erreur = $er;
        }

        public function afficheInit($info){

            echo'
            <head>
              <script type="text/javascript" src="./scripts/compte.js"> </script>
            <head>
            <body >
              <main class="container padding-bottom padding-top-xl mt-5 mb-5 justify-content-center">
                <div class="row mt-5 justify-content-center">
                  <div class="col-md-8 offset-md-9">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h4>'.$info['pseudo'].' / Compte</h4>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row" >
                                  <div class="col-md-12" >
                                  <p>';
                			if ($this->erreur != "") {
                                echo '<ul class="list-group ">';
                                        echo '	        <li class="list-group-item list-group-item-danger">';
                                        echo $this->erreur;
                                        echo "        </li>\n";
                                echo '</ul>';
                            }
                			echo'
                                            <div class="form-group row">
                                              <label for="Pseudo" class="col-4 col-form-label">Pseudo </label>
                                              <div class="col-8">
                                                <label for="Pseudo" class="col-12 col-form-label">'.$info['pseudo'].'<a href="#" ><img class="ml-2" src="./Images/logo_modif.png"width="30" height="30" onclick="change(1)" alt="logomodif"/></a></label>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="E-mail" class="col-4 col-form-label">Adresse mail</label>
                                              <div class="col-8">
                                                <label for="Pseudo" class="col-12 col-form-label">'.$info['email'].'<a href="#" ><img class="ml-2" src="./Images/logo_modif.png"width="30" height="30"  onclick="change(2)" alt="logomodif"/></a></label>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="lastname" class="col-4 col-form-label">Mot de passe</label>
                                              <div class="col-8">
                                                <label for="Pseudo" class="col-12 col-form-label">********<a href="#" ><img class="ml-2" src="./Images/logo_modif.png"width="30" height="30" onclick="change(3)" alt="logomodif"/></a></label>
                                              </div>
                                            </div>
                                            <div id="d1">
                                            </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                </div>
                </div>
                </main>
            </body>
            ';
        }


    }

?>
