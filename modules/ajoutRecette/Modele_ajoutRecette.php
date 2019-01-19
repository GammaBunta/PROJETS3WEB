<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_ajoutRecette extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function ajoutUtiliser($idRecette, $quantite,$ingredient){
            $result = self::$bdd -> prepare('SELECT idingr from Ingredient where nomingr=:nom');
            $result -> bindParam(':nom', $ingredient);
            $res = $result -> execute();
            $idingr=$result->fetch()[0];
            $req = self::$bdd -> prepare('INSERT INTO `utiliser` (`idrec`, `idingr`, `quantite`) VALUES (:idrec,:idingr,:quantite)');
            $res = $req -> execute(array(':idrec'=>$idRecette,':idingr'=>$idingr,'quantite'=>$quantite));

        }

        public function publier(){

            if($this->verifToken()){
                if(!empty($_FILES['imageRecette'])){
                    $imageRecette = $_FILES['imageRecette'];
                    if(!empty($imageRecette['tmp_name'])){
                        $extension = explode('.', $imageRecette['name']);
                        $extension = strtolower(end($extension));
                        $extensions = array("jpg","png","jpeg","gif");
                        if(in_array($extension,$extensions)){
                            $type_mime = array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');
                            $image_mime_type = mime_content_type($imageRecette['tmp_name']);
                            if(in_array($image_mime_type, $type_mime)){
                                $taille_image = $imageRecette['size'];
                                $taille_max = 8000000;
                                if($taille_max > $taille_image){
                                    $nouveauNom = md5(uniqid(rand(), true)) . '.' . $extension;
                                    $chemin = './Images/imagesRecettes/' . $nouveauNom;
                                    if(move_uploaded_file($imageRecette['tmp_name'],$chemin)){
                                        $img = $chemin;
                                    }else{
                                        $img = NULL;
                                    }

                                }else{
                                    $img = NULL;
                                }

                            }else{
                                $img = NULL;
                            }

                        }else{
                            $img = NULL;
                        }
                    }else{
                        $img = NULL;
                    }
                }else{
                    $img = NULL;
                }



                $nomRecette = $_POST['nomRecette'];
                $categorie = $_POST['categorie'];
                $niveau = $_POST['niveau'];
                $vegetarien = $_POST['optionsVege'];

                if($vegetarien == 'option1'){
                    $vegetarien=1;
                }else{
                    $vegetarien=0;
                }

                $gluten = $_POST['optionsGluten'];
                if($gluten=='option1'){
                    $gluten=1;
                }else{
                    $gluten=0;
                }

                $nbPers = $_POST['nbPers'];
                $tpsPrepa =$_POST['tpsPrepa'];
                $tpsRepos = $_POST['tpsRepos'];
                $tpsCuisson = $_POST['tpsCuisson'];
                $text = $_POST['texteRecette'];
                $nbavis=0;
                $idUser = $_SESSION['id'];

                $req = self::$bdd -> prepare('INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values (DEFAULT,:idUser,:titre,:nbpers,:categorie,:vegetarien,:gluteen,0,0,:niveau,:tpsprepa,:tpscuisson,:tpsrepos,:textrec,:img,:nombreAvis)');
                $res = $req -> execute(array(':idUser'=>$idUser,':titre'=> $nomRecette,':nbpers'=>$nbPers,':categorie'=>$categorie,':vegetarien'=>$vegetarien,':gluteen'=>$gluten,':niveau'=>$niveau,':tpsprepa'=>$tpsPrepa,':tpscuisson'=>$tpsCuisson,':tpsrepos'=>$tpsRepos,':textrec'=>$text,':img'=>$img,':nombreAvis'=>$nbavis));

                $ingredients=explode(',',$_POST['listeIngredients']);
                $quantites = explode(',',$_POST['listeQuantites']);
                $idRecette = self::$bdd -> lastInsertId();
                $i =0;
                foreach($ingredients as $item){
                    $this->ajoutUtiliser($idRecette,$quantites[$i],$item);
                    $i++;
                }

                return $idRecette;
            }
            else{
                return false;
            }


        }

    }
?>
